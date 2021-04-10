<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
            /* $role = Auth::user()->role->name; 
                echo '<pre>';print_r($role);die;
        // Check user role
        switch ($role) {
            case 'Manager':
                    return '/dashboard';
                break;
            case 'Employee':
                    return '/projects';
                break; 
            default:
                    return '/login'; 
                break;*/
        }
    }
}
