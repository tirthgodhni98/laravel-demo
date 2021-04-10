<?php

namespace App\Http\Controllers;

use App\Registration_insert;
use \Illuminate\Http\Response;
use Validator;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class Registration extends Controller
{
    //
    public function insert(){
        //$urlData = getURLList();
        
        return view('login');
    }
    public function create(Request $request){

        // echo '1';die;
        // $rules =;
        
        
        $validator = Validator::make($request->all(), [
            // 'property_type' => 'required',
            'email_id' => 'required|string|email|unique:registrations',
            'fname' => 'required|string|min:3',
			'lname' => 'required|string|min:3',
			'phone_no' => 'required|integer|min:10',
			'pwd' => 'required|string|min:8|max:20',
        ]);
        
        //echo '<pre>';print_r($validator);die;
		if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
            
		}
		else{
            $data = $request->input();
			try{
				$registration = new Registration_insert;
                $registration->fname = $data['fname'];
                $registration->lname = $data['lname'];
				$registration->phone_no = $data['phone_no'];
                $registration->email_id = $data['email_id'];
                $registration->user_type = $data['property_type'];
                $registration->gender = $data['gender'];
                $registration->password = $data['pwd'];
				$registration->save();
				return redirect('/create')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('create')->with('failed',"operation failed");
			}
		}
    }
    

}
