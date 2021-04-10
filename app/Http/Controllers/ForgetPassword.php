<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration_insert;
use DB;
use Validator;
use Mail;
use Illuminate\Validation\Rule;

class ForgetPassword extends Controller
{
    //
    public function forget_password()
    {
        return view('forget_password');
    }
    public function forget_pass(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);
        $data = $request->input();
        $email_id = $data['email'];
        $user = DB::table('registrations')->where('email_id', '=', $email_id)->first();
        // echo "<pre>";print_r($user);die;
        if (empty($user) ) {
            return redirect()->back()->withErrors(['email' => trans('Something went wrong!! Please try again...')]);
        }
        else{
            $data = array('email_id'=>$user->email_id,'password'=>$user->password,);
            Mail::send('forget_mail_pass', $data, function($message) use ($email_id) {
                $message->to($email_id)->subject
                    ('Forget Password');
                $message->from('mcaprojectfile2020@gmail.com','Click.com');
            });
            return redirect()->back()->withErrors(['send_mail' => trans('Please check your email inbox or spam.......')]);
        }
        // echo $email_id;die;
        return view('forget_password');
    }
}
