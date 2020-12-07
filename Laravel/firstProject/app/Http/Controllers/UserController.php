<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function checkLogin(Request $request)
    {
        # code...
        $email = $request->email;
        $password = $request->password;
        
    
        return view('user',compact('email', 'password'));
    }
}
