<?php


namespace App\Http\Repositories\Categories;


interface RepoInterface
{
    public function getAll();
    public function store($obj);
    public function update($obj);
    public function delete($id);
    public function findById($id);
    public function search($id);
}
