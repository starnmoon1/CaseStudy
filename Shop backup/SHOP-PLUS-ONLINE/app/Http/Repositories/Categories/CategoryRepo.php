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
        $obj->save();
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function delete($obj)
    {
        $obj->delete();
    }

    public function findById($id)
    {
        return $this->category->findOrFail($id);
    }

    public function search($id)
    {
        // TODO: Implement search() method.
    }
}
