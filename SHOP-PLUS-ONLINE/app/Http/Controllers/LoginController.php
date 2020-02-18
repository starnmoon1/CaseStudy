<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function formLogin() {
        return view('login.login');
    }

    public function formRegister() {
        return view('login.register');
    }
}
