<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function getall()
    {
       
        $users = User::all();
        dd($users);
    }
}
