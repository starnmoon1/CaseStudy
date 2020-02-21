<?php


namespace App\Http\Services\Products;


interface ServiceInterface
{
    public function getAll();
    public function getById($id);
    public function create($request);
    public function delete($obj);
    public function update($request, $id);
    public function findById($id);
    public function search($keyword);
}
