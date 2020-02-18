<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\UserRequest;
use App\Http\services\Users\UserService;
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

    public function postComment($request, $user_id)
    {
        $comment = new Comment();
        $user = $this->userService->findById($id);
        $comment->fill($request->all());
        $comment['user_id'] = $user->id;
        $comment->save();

    }
}
