<?php

namespace App\Http\Middleware;

use Closure;

use App\Registration_insert;
class User
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
        $user = session()->get('data');
            // echodie;
            $data = Registration_insert::where('email_id',$user)->first();
            if($data['user_type'] == '1'){
                 $request->session()->put('data', $data['email_id']);
                 return $next($request);
                
            }
            if($data['user_type'] == 2 ){
                $request->session()->put('data', $data['email_id']);
                return redirect('hostpanel');
            }
            if($data['user_type'] == 0 ){
                $request->session()->put('data', $data['email_id']);
                return redirect('adminpanel');
            }
            return $next($request);
        
    }
}
