<?php


namespace App\Http\services\Users;


use App\Http\Repositories\Users\UserRepo;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class UserService implements ServiceInterface
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    function getAll()
    {
       return $this->userRepo->getAll();
    }

    function create($request)
    {
        $user = new User();
        $user->fill($request->all());
        $user['password'] = Hash::make($request->password);
        $this->userRepo->storeOrUpdate($user);
    }

    function update($request, $id)
    {
        $user = $this->findById($id);
        $user->fill($request->all());
        $user['password'] = Hash::make($request->password);
        $this->userRepo->storeOrUpdate($user);

    }

    function destroy($id)
    {
        $user = $this->findById($id);
        $this->userRepo->delete($user);
    }

    function findById($id)
    {
        return $this->userRepo->findById($id);
    }
}
