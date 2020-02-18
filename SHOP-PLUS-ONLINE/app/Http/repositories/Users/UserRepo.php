<?php


namespace App\Http\repositories\Users;


use App\User;

class UserRepo implements UserRepoInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function getAll()
    {
        return $this->user->all();
    }

    function storeOrUpdate($obj)
    {
        $obj->save();
    }

    function delete($obj)
    {
        $obj->delete();
    }

    function findById($id)
    {
         return $this->user->findOrFail($id);
    }
}
