<?php

namespace App\Http\Controllers\Auth;


use App\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;


class AuthController extends Controller
{


    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|max:255',
//            'email' => 'required|email|max:255|unique:users',
//            'password' => 'required|confirmed|min:6',
//        ]);
//    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $userModel = new User;
            $createdUser = $userModel->addNew($user);
            Auth::loginUsingId($createdUser->id);
            return redirect()->route('home');
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }
    }
}
