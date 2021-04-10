<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration_insert;
use App\Booking;
use DB;

class HostPorfile extends Controller
{
    //
    public function index(Request $request)
    {
        $data['host'] = Registration_insert::where('email_id',$request->session()->get('data'))->first();
        // echo "<pre>";print_r($data);die;
        return view('hostprofile',$data);
    }
    public function update_host_profile(Request $request)
    {
        // echo "dddd";die;
        $data=array(
            'fname'=>$request['fname'],
            'lname'=>$request['lname'],
            'gender'=>$request['gender'],
            'phone_no'=>$request['phone_no']
        );
        Registration_insert::where('email_id', $request->session()->get('data'))->update($data);
        return redirect('/hostprofile');
    }
    public function update_host_password(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|min:8',
            'new_password' => 'required|min:8',
            'conform_password' => 'required|min:8|same:new_password',
        ]);
        $user = Registration_insert::where('email_id',$request->session()->get('data'))->first();
        
        if($user['password'] == $request['old_password'])
        {
            Registration_insert::where('email_id', $request->session()->get('data'))->update(['password'=>$request['new_password']]);
            return redirect('/hostprofile')->with('sucess', 'Your Password Is Changed !!');
        }   
        else
        {
            return redirect('/hostprofile')->with('old_password', 'Your Old Password Is wrong !!'); 
        }
        //return redirect('/adminprofile');    

    }
    public function bookingdisplay(Request $request)
    {
        $data['booking_data'] = DB::table('bookings')
        ->join('propertys','propertys.id','=','bookings.pro_id')
        ->join('registrations','registrations.email_id','=','bookings.email_id')
        ->where(['propertys.email_id'=>$request->session()->get('data'),'bookings.status'=>1])
        ->select('bookings.*','propertys.name as pro_name','registrations.email_id as cemail_id','registrations.lname','registrations.fname','registrations.phone_no')
        ->orderBy('id', 'DESC')->paginate(10);
        return view ('bookingdisplay',$data);
    }
    public function hostcanclebooking(Request $request)
    {
        $data['booking_data'] = DB::table('bookings')
        ->join('propertys','propertys.id','=','bookings.pro_id')
        ->join('registrations','registrations.email_id','=','bookings.email_id')
        ->where(['propertys.email_id'=>$request->session()->get('data'),'bookings.status'=>0])
        ->select('bookings.*','propertys.name as pro_name','registrations.email_id as cemail_id','registrations.lname','registrations.fname','registrations.phone_no')
        ->orderBy('id', 'DESC')->paginate(10);
        return view ('hostcanclebooking',$data);
    }
    
}
