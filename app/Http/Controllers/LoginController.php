<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Login function that will eventually login users
    // At the moment we will simply route to the Login View
    public function login()
    {
        return view('login');
    }

}
