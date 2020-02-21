<?php


namespace App\Http\Services\Products;


interface ServiceInterface
{
    public function getAll();
    public function create($request);
    public function delete($obj);
    public function update($request, $id);
    public function findById($id);
    public function search($keyword);
}
