<?php


namespace App\Http\Services\Categories;


use App\Http\Repositories\Categories\CategoryRepoInterface;

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

    public function findById($id)
    {

    }

    public function search($keyword)
    {
        // TODO: Implement search() method.
    }
}
