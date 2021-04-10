<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use DB;
use Carbon;
use Mail;

class PropertyBooking extends Controller
{
    //
    public function checkpropertybooking(Request $request)
    {
        $from = $request['check_inn'];
        $to = $request['check_outt'];
    //    echo $request['check_inn'];
    //    DB::enableQueryLog();
        $data['booking'] = DB::table('bookings')
        ->where(function ($endquerys) use ($request){
            $endquerys->where('pro_id',$request['property_id'])
            ->where('status',1);
        })
        ->where(function ($querys) use ($request){
            $querys->whereBetween('check_in',[$request['check_inn'],$request['check_outt']])
            ->orWhereBetween('check_out',[$request['check_inn'],$request['check_outt']])
            ->orwhere('check_in','<=',$request['check_inn'])
            ->Where('check_out','>=',$request['check_outt']);
        })
        ->get();
        // $quries = DB::getQueryLog();
        // dd($quries);
        return response()->json($data);
        
    }
    public function reservepropertie(Request $request)
    {
        $pro_id = $request['property_id'];
        $total = $request['totals'];
        $check_in = $request['check_inn'];
        $check_out = $request['check_outt'];
        $user_id = $request->session()->get('data');
        // echo $user_id;die;
        $add_booking = new Booking;
        $add_booking->pro_id = $pro_id;
        $add_booking->email_id =$user_id;
        $add_booking->check_in=$check_in;
        $add_booking->check_out=$check_out;
        $add_booking->amount=$total;
        $add_booking->save();

        $por = DB::table('propertys')->where('id',$pro_id)->first();
        $user = DB::table('registrations')->where('email_id',$por->email_id)->first();
        // echo "<pre>";print_r($user);die;
        
        $data = array('propery_name'=>$por->name,'propery_Host_phone'=>$user->phone_no,'host_email_id'=>$por->email_id,'check_in'=>$check_in,'check_out'=>$check_out,'total'=>$total,);
        Mail::send('send_mail_cust', $data, function($message) use ($user_id) {
            $message->to($user_id)->subject
                ('Booking conformation ');
            $message->from('mcaprojectfile2020@gmail.com','Click.com');
        });

        $userr = DB::table('registrations')->where('email_id',$user_id)->first();
        $data = array('propery_name'=>$por->name,'cust_phone'=>$userr->phone_no,'email_id'=>$user_id,'check_in'=>$check_in,'check_out'=>$check_out,'total'=>$total,);
        $pro_email_id =  $por->email_id;
        Mail::send('send_mail_host', $data, function($message) use ($pro_email_id)  {
            $message->to($pro_email_id)->subject
                ('Booking conformation');
            $message->from('mcaprojectfile2020@gmail.com','Click.com');
        });

        return redirect('/customerbooking');

    }
    public function customerbooking(Request $request)
    {
        // $data['booking_data'] = Booking::where('email_id',$request->session()->get('data'))->get();
        $data['booking_data'] = DB::table('bookings')
        ->join('propertys','propertys.id','=','bookings.pro_id')
        ->join('registrations','registrations.email_id','=','propertys.email_id')
        ->where(['bookings.email_id'=>$request->session()->get('data'),'bookings.status'=>1])
        ->select('bookings.*','propertys.name as pro_name','propertys.email_id as email_id','registrations.lname','registrations.fname','registrations.phone_no')
        ->orderBy('id', 'DESC')->paginate(10);
        // echo "<pre>";print_r($data);die;
        return view('customerbooking',$data);
    }
    public function canclebooking(Request $request)
    {
        // echo $request['canclebooking'];die;
        Booking::where('id',$request['canclebooking'])->update(['status'=>0]);
        return redirect('/customercanclebooking');
    }
    public function customercanclebooking(Request $request)
    {
        // $data['booking_data'] = Booking::where('email_id',$request->session()->get('data'))->get();
        $data['booking_data'] = DB::table('bookings')
        ->join('propertys','propertys.id','=','bookings.pro_id')
        ->join('registrations','registrations.email_id','=','propertys.email_id')
        ->where(['bookings.email_id'=>$request->session()->get('data'),'bookings.status'=>0])
        ->select('bookings.*','propertys.name as pro_name','propertys.email_id as email_id','registrations.lname','registrations.fname','registrations.phone_no')
        ->orderBy('id', 'DESC')->paginate(10);
        // echo "<pre>";print_r($data);die;
        return view('customercanclebooking',$data);
    }
}
