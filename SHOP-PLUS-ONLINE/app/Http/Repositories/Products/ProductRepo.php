<?php


namespace App\Http\Repositories\Products;


use App\Http\Services\Products\ProductServiceInterface;
use App\Product;

class ProductRepo implements ProductServiceInterface
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product=$product;
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
