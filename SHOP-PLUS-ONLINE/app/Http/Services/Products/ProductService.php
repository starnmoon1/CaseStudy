<?php


namespace App\Http\Services\Products;


class ProductService implements ProductServiceInterface
{
    protected $productRepo;
    public function __construct($productRepo)
    {
        $this->productRepo=$productRepo;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }
}
