<?php


namespace App\Http\Services\Products;


use App\Http\Repositories\Products\ProductRepoInterface;
use App\Product;
use Illuminate\Support\Facades\Storage;

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
    public function getById($id)
    {
        return $this->productRepo->getById($id);
    }

    public function create($request)
    {
        $product = new Product();
        $product->name = $request->product_name;
        $product->category_id = $request->product_category;
        $product->description = $request->product_description;
        $product->content = $request->product_content;
        $product->price = $request->product_price;
        if(!$request->hasFile('product_image')) {
            $product->image = 'http://thuthuatphanmem.vn/uploads/2018/09/11/hinh-anh-dep-3_044126905.jpg';
        } else {
            $image = $request->product_image;
            $image_name = date('Y-m-d H:i:s').'_'.$image->getClientOriginalName();
            $product->image = $image_name;
            $request->product_image->storeAs('public/images/', $image_name);
        }
        $this->productRepo->store($product);
    }

    public function delete($id)
    {
        $product = $this->productRepo->findById($id);
        $name_image = $product->image;
        if($name_image) {
            Storage::delete('public/images/'.$name_image);
        }
        $this->productRepo->delete($product);
    }

    public function update($request, $id)
    {
        $product = $this->productRepo->findById($id);
        $product->name = $request->product_name;
        $product->category_id = $request->product_category;
        $product->description = $request->product_description;
        $product->content = $request->product_content;
        $product->price = $request->product_price;
        $name_image = $product->image;
        if ($request->hasFile('product_image')) {
            if($name_image) {
                Storage::delete('public/images/'.$name_image);
            }
            $image = $request->product_image;
            $image_name = date('Y-m-d H:i:s').'_'.$image->getClientOriginalName();
            $product->image = $image_name;

            $request->product_image->storeAs('public/images', $image_name);

        }

        $this->productRepo->update($product);

    }

    public function search($request)
    {
        return $this->productRepo->search($request->keyword);
    }

    public function findById($id)
    {
        return $this->productRepo->findById($id);
    }


}
