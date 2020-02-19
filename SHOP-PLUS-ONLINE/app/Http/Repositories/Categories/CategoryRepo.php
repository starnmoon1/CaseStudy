<?php


namespace App\Http\Repositories\Categories;


use App\Category;

class CategoryRepo implements CategoryRepoInterface
{
    protected $category;
    public function __construct(Category $category)
    {
        $this->category=$category;
    }

    public function getAll()
    {
        return $this->category->all();
    }

    public function store($obj)
    {
        // TODO: Implement store() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function search($id)
    {
        // TODO: Implement search() method.
    }
}
