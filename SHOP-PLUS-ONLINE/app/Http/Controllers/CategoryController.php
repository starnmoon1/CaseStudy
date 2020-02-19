<?php

namespace App\Http\Controllers;

use App\Http\Services\Categories\CategoryServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService=$categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAll();
        dd($categories);
        return view('categories.list');
    }
    public function create()
    {
        return view('categories.admin.create');
    }
}
