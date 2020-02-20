<?php

namespace App\Http\Controllers;

use App\Http\Services\Categories\CategoryServiceInterface;
use App\Http\Services\Products\ProductServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $categories = $this->categoryService->getAll();
        return view('home', compact(['products','categories']));
    }

    public function search(Request $request)
    {
        $categories = $this->categoryService->getAll();
        $products = $this->productService->search($request);
        return view('home', compact(['products','categories']));
    }



}
