<?php


namespace App\Http\Services\Products;


use App\Http\Repositories\Products\ProductRepoInterface;

class ProductService implements ProductServiceInterface
{
    protected $productRepo;

    public function __construct(ProductRepoInterface $productRepo)
    {
        $this->productRepo=$productRepo;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
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
