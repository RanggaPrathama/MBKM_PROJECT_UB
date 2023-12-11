<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexlogin(){
        return view('pages.auth.login');
    }

    public function indexregister(){
        return view('pages.auth.register');
    }

    public function register_post(){
        
    }
}
