<?php

namespace App\Http\Controllers;

use App\Http\Services\Categories\CategoryServiceInterface;
use App\Http\Services\Products\ProductServiceInterface;
use Illuminate\Http\Request;

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
        return view('products.admin.list');
    }

    public function detail() {
        return view('products.detail');
    }

    public function create() {
        return view('products.admin.create');
    }

    public function checkout()
    {
        return view('products.checkout');
    }

    public function formCart() {
        return view('products.cart');
    }
}
