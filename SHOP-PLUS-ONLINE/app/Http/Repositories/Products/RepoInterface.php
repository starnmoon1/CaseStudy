<?php


namespace App\Http\Repositories\Products;


interface RepoInterface
{
    public function getAll();
    public function getById($id);
    public function store($obj);
    public function update($obj);
    public function delete($id);
    public function findById($id);
    public function search($keyword);
}
