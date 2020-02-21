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

    public function getById($id)
    {
        return $this->product->all()->where('category_id', $id);
    }

    public function delete($obj)
    {
        $obj->delete();
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function store($obj)
    {
       $obj->save();
    }

    public function findById($id)
    {
        return $this->product->findOrFail($id);
    }

    public function search($keyword)
    {
        return $this->product->where('name', 'like', '%'.$keyword.'%')->get();
    }


}
