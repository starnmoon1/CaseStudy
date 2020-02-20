<?php

namespace App\Http\Controllers;

use App\Http\Services\Categories\CategoryServiceInterface;
use App\Http\Services\Products\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;
    public function __construct(ProductServiceInterface $productService, CategoryServiceInterface $categoryService)
    {
        $this->productService=$productService;
        $this->categoryService=$categoryService;
    }

    public function index() {
        $products = $this->productService->getAll();
        return view('products.admin.list', compact('products'));
    }

    public function detail() {
        return view('products.detail');
    }

    public function create() {
        $categories = $this->categoryService->getAll();
        return view('products.admin.create', compact('categories'));
    }

    public function store(Request $request) {
        $this->productService->create($request);
        return redirect()->route('product.list');
    }

    public function edit($id)
    {
        $product = $this->productService->findById($id);
        $categories = $this->categoryService->getAll();
        return view('products.admin.edit', compact(['product', 'categories']));
    }

    public function update(Request $request, $id) {
        $this->productService->update($request, $id);
        return redirect()->route('product.list');
    }

    public function delete($id) {
        $this->productService->delete($id);
        return redirect()->route('product.list');
    }


    public function checkout()
    {
        return view('products.checkout');
    }

    public function formCart() {
        return view('products.cart');
    }
}
