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
        return view('categories.admin.list', compact('categories'));
    }
    public function create()
    {
        return view('categories.admin.create');
    }
}
