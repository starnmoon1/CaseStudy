<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function formLogin() {
        return view('login.login');
    }

    public function formRegister() {
        return view('login.register');
    }
    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $data = [
            'email' => $email,
            'password'=>$password
        ];
        if(Auth::attempt($data))
        {
            return redirect()->route('product.list');
        }
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return view('login.login');
    }
}
