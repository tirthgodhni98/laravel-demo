<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration_insert;
use App\ContactUs;
use DB;

class AdminPorfile extends Controller
{
    //
    public function index(Request $request)
    {
        $data['admin'] = Registration_insert::where('email_id',$request->session()->get('data'))->first();
        // echo "<pre>";print_r($data);die;
        return view('admin_profile',$data);
    }
    public function update_profile(Request $request)
    {
        // echo "dddd";die;
        $data=array(
            'fname'=>$request['fname'],
            'lname'=>$request['lname'],
            'gender'=>$request['gender'],
            'phone_no'=>$request['phone_no']
        );
        Registration_insert::where('email_id', $request->session()->get('data'))->update($data);
        return redirect('/adminprofile');
    }
    public function update_password(Request $request)
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
            return redirect('/adminprofile')->with('sucess', 'Your Password Is Changed !!');
        }   
        else
        {
            return redirect('/adminprofile')->with('old_password', 'Your Old Password Is wrong !!'); 
        }
        //return redirect('/adminprofile');    

    }
    public function allcustomer()
    {
        $data['user'] = Registration_insert::where('user_type',1)->paginate(10);
        //echo "<pre>";print_r($user);die;
        return view('allcustomer',$data);

    }
    public function allhost()
    {
        $data['user'] = Registration_insert::where('user_type',2)->paginate(10);
        //echo "<pre>";print_r($user);die;
        return view('allhost',$data);

    }
    public function show_contactus()
    {
        $data['user'] = ContactUs::paginate(10);
        //echo "<pre>";print_r($user);die;
        return view('show_contact',$data);

    }
    public function allbooking()
    {
        $data['booking_data'] = DB::table('bookings')
        ->join('propertys','propertys.id','=','bookings.pro_id')
        ->join('registrations','registrations.email_id','=','bookings.email_id')
        ->where(['bookings.status'=>1])
        ->select('bookings.*','propertys.name as pro_name','propertys.email_id as pro_email',   'registrations.email_id as cemail_id','registrations.lname','registrations.fname','registrations.phone_no')
        ->orderBy('id', 'DESC')->paginate(10);
        return view ('allbooking',$data);
    }
    public function allcanclebooking()
    {
        $data['booking_data'] = DB::table('bookings')
        ->join('propertys','propertys.id','=','bookings.pro_id')
        ->join('registrations','registrations.email_id','=','bookings.email_id')
        ->where(['bookings.status'=>0])
        ->select('bookings.*','propertys.name as pro_name','propertys.email_id as pro_email',   'registrations.email_id as cemail_id','registrations.lname','registrations.fname','registrations.phone_no')
        ->orderBy('id', 'DESC')->paginate(10);
        return view ('allcanclebooking',$data);
    }
}
