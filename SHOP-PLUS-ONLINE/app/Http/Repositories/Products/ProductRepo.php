<?php


namespace App\Http\Repositories\Products;


use App\Http\Services\Products\ProductServiceInterface;
use App\Product;

class ProductRepo implements ProductRepoInterface
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product=$product;
    }

    public function getAll()
    {
        return $this->product->all();
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    public function update($obj)
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

    public function store($obj)
    {
        // TODO: Implement store() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
