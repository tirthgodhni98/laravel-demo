<?php

namespace App\Http\Middleware;

use Closure;

use App\Registration_insert;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $url =  $request->segment(1);
        // echo session()->has('data');die;
        if(!session()->get('data'))
        {   
            return redirect('login');
        }else{

            $user = session()->get('data');
            // echodie;
            $data = Registration_insert::where('email_id',$user)->first();
            // echo '<pre>';print_r($data['user_type']);die;
            if($data['user_type'] == '1'){
                return redirect('customerpanel');
            }
            if($data['user_type'] == 2 ){
                $request->session()->put('data', $data['email_id']);
                return redirect('hostpanel');
            }
            if($data['user_type'] == 0 ){

               $request->session()->put('data', $data['email_id']);
                 return $next($request);
               
            }
            return $next($request);
        }
    }
}
