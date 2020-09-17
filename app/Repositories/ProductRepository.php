<?php


namespace App\Repositories;
use App\Models\Product;

class ProductRepository implements Contracts\ProductRepositoryContract
{
    protected $_model;

    public function __construct(Product $product)
    {
        $this->_model = $product;
    }

    public function getAll()
    {
        return $this->_model->with('category')->get();
    }

    public function create($data)
    {
        return $this->_model->create($data);
    }

    public function getById($id)
    {
        return $this->_model->where('id', $id)->with('category')->first();
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
