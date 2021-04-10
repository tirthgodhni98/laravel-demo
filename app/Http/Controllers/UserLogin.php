<?php

namespace App\Http\Controllers;
use App\Registration_insert;
use \Illuminate\Http\Response;
use Validator;
use Illuminate\Validation\Rule;
// use Auth;
use Illuminate\Http\Request;

class UserLogin extends Controller
{
    // //
    
    public function login_v(Request $request){

        $validator = Validator::make($request->all(), [
            // 'property_type' => 'required',
            'username' => 'required|string|email|',
            'login_password' => 'required|string|min:8|max:20',
        ]);
		if ($validator->fails()) {
            return response()->json(['errors_login' => $validator->errors()->all()]);
            
		}
		else{
           // $data = $request->input();
			try{
                $user = Registration_insert::where('email_id',$request['username'])->first();
                // echo "<pre>";print_r($user);die;
                if(!empty($user)){
                   
                    if($user['password'] == $request['login_password']){
                            if($user['user_type'] == 1){
                                $request->session()->put('data', $user['email_id']);
                                $request->session()->put('user_type', $user['user_type']);
                                //return 'customerpanel';
                                return response()->json('customerpanel');
                            }elseif($user['user_type'] == 2){
                                $request->session()->put('data', $user['email_id']);
                                $request->session()->put('user_type', $user['user_type']);
                               // return 'hostpanel';
                                return response()->json('hostpanel');
                            }else {
                                $request->session()->put('data', $user['email_id']);
                                $request->session()->put('user_type', $user['user_type']);
                                //return 'adminpanel';
                                return response()->json('adminpanel');
                            }
                            
                    }else{
                        return response()->json(['credentials_error' => "Password Is Invalid!!!"]);
                    }
                }else{
                   return response()->json(['credentials_error' => 'Username and password Invalid']);
                }
            }
			catch(Exception $e){
				return redirect('login_v')->with('failed',"operation failed");
			}
		}
    }
}
