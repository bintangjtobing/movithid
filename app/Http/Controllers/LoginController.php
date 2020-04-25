<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function signin()
    {
        return view('homepage.signin');
    }
    public function signup()
    {
        return view('homepage.register');
    }
}
