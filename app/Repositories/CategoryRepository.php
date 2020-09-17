<?php


namespace App\Repositories;
use App\Models\Category;

class CategoryRepository implements Contracts\CategoryRepositoryContract
{
    protected $_model;

    public function __construct(Category $category)
    {
        $this->_model = $category;
    }

    public function getAll()
    {
        return $this->_model->get();
    }

    public function create($data)
    {      
        return $this->_model->create($data);
    }

    public function update($id, $data)
    {
        return $this->_model->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->_model->where('id', $id)->delete();
    }
}
