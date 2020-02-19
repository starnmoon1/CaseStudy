<?php


namespace App\Http\Services\Categories;


use App\Category;
use App\Http\Repositories\Categories\CategoryRepoInterface;
use App\Product;

class CategoryService implements CategoryServiceInterface
{
    protected $categoryRepo;
    public function __construct(CategoryRepoInterface $categoryRepo)
    {
        $this->categoryRepo=$categoryRepo;
    }

    public function getAll()
    {
        return $this->categoryRepo->getAll();
    }

    public function create($request)
    {
        $category = new Category();
        $category->name = $request->category_name;
        $this->categoryRepo->store($category);
    }

    public function delete($obj)
    {
        $this->categoryRepo->delete($obj);
    }

    public function update($request, $id)
    {
        $category = $this->categoryRepo->findById($id);
        $category->name = $request->category_name;
        $this->categoryRepo->update($category);

    }

    public function findById($id)
    {
        return $this->categoryRepo->findById($id);
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }
}
