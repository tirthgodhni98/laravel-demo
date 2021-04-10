<?php

namespace App\Http\Middleware;

use Closure;
use App\Registration_insert;
class CustomerAuth
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
        // echo $request;die;
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
            if($data['user_type'] == '1' && $url == 'customerpanel'){
                //echo $data['user_type'];die;
                $request->session()->put('data', $data['email_id']);
                // return 'customerpanel';
                return $next($request);
            }elseif($data['user_type'] == 2 && $url == 'hostpanel'){
                //echo $data['user_type'];die;

                $request->session()->put('data', $data['email_id']);
                 return $next($request);
            }elseif($data['user_type'] == 0 && $url == 'adminpanel'){

                //echo $data['user_type'];die;
                $request->session()->put('data', $data['email_id']);
                return $next($request);
            }else{
                //echo '12';die;
                return $next($request);
            }
        }
        
    }
}
