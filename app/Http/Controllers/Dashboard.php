<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Dashboard extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('customerAuth');
    }
    public function hostpanel()
    {
        return view('hostpanel');
    }
    public function adminpanel()
    {
        return view('adminpanel');
    }
    
    public function customerpanel()
    {
        return view('customerpanel');
    }
    public function logout()
    {
        session()->forget('data');
        return Redirect::to('home');
        

    }
}
