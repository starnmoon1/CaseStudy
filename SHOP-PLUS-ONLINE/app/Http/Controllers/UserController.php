<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\UserRequest;
use App\Http\Services\Users\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(UserRequest $request)
    {
        $this->userService->create($request);
        return redirect()->route('home');
    }
}
