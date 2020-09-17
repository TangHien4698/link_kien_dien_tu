<?php


namespace App\Services;
use App\Repositories\Contracts\CategoryRepositoryContract;

class CategoryService implements Contracts\CategoryServiceContract
{
    protected $_categoryRepo;

    public function __construct(CategoryRepositoryContract $categoryRepo)
    {
        $this->_categoryRepo = $categoryRepo;
    }

    public function getAll()
    {
        return $this->_categoryRepo->getAll();
    }

    public function create($data)
    {
        return $this->_categoryRepo->create($data);
    }

    public function update($id, $newData)
    {

        return $this->_categoryRepo->update($id, $newData);
    }

    public function delete($id)
    {
       return $this->_categoryRepo->delete($id);
    }
}
