<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration_insert;

class UserProfile extends Controller
{
    //
    public function index(Request $request)
    {
        $data['user'] = Registration_insert::where('email_id',$request->session()->get('data'))->first();
        // echo "<pre>";print_r($data);die;
        return view('userprofile',$data);
    }
    public function update_user_profile(Request $request)
    {
         $data=array(
            'fname'=>$request['fname'],
            'lname'=>$request['lname'],
            'gender'=>$request['gender'],
            'phone_no'=>$request['phone_no']
        );
        Registration_insert::where('email_id', $request->session()->get('data'))->update($data);
        return redirect('/userprofile');
    }
    public function update_user_password(Request $request)
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
            return redirect('/userprofile')->with('sucess', 'Your Password Is Changed !!');
        }   
        else
        {
            return redirect('/userprofile')->with('old_password', 'Your Old Password Is wrong !!'); 
        }  

    }
}
