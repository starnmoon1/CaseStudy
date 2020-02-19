<?php


namespace App\Http\Services\Categories;


class CategoryService implements CategoryServiceInterface
{
    protected $categoryRepo;
    public function __construct($categoryRepo)
    {
        $this->categoryRepo=$categoryRepo;
    }

    public function getAll()
    {
        return $this->categoryRepo->getAll();
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }
}
