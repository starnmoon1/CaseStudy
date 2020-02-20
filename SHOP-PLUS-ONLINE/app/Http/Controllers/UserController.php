<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\UserRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Services\Users\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(RegisterRequest $request)
    {

        $this->userService->create($request);
        return redirect()->route('login');
    }

    public function index()
    {
        if (!Gate::allows('crud-user')) {
            abort(403);
        }
        $users = $this->userService->getAll();
        return view('users.admin.list', compact('users'));
    }

    public function destroy($id)
    {
        $this->userService->destroy($id);
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        $user = $this->userService->findById($id);

        return view('users.admin.edit', compact('user'));
    }

    public function edit(Request $request, $id)
    {
        $this->userService->update($request, $id);
        return redirect()->route('user.index');
    }

    public function update(Request $request, $id)
    {
        $this->userService->update($request, $id);
     return redirect()->route('user.index');
    }

}
