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

    public function store(Request $request) {
        $this->categoryService->create($request);
        return redirect()->route('category.list');
    }

    public function edit($id)
    {
        $category = $this->categoryService->findById($id);
        return view('categories.admin.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $this->categoryService->update($request, $id);
        return redirect()->route('category.list');
    }

    public function delete($id) {
        $category = $this->categoryService->findById($id);
        $this->categoryService->delete($category);
        return redirect()->route('category.list');
    }
}

