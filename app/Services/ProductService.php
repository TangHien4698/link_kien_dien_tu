<?php


namespace App\Services;
use App\Repositories\Contracts\ProductRepositoryContract;

class ProductService implements Contracts\ProductServiceContract
{
    protected $_productRepo;

    public function __construct(ProductRepositoryContract $productRepo)
    {
        $this->_productRepo = $productRepo;
    }

    public function getAll()
    {
        return $this->_productRepo->getAll();
    }

    public function create($request)
    {
        $data = $request->only('name','pro_rewrite' ,'category_id', 'price',
            'specifications', 'description', 'pro_price_good', 'amount' );
        $image = $this->checkImage($request);
        if ($image) {
            $data['image'] = 'img/'.$image;
        }

        $product = $this->_productRepo->create($data);
        return $product;
    }

    private function checkImage($request)
    {
        $image = [];
        if ($request->hasFile('image')) {
        $file = $request->file('image');

            $typeFile = $file->getClientOriginalExtension();
            if ($typeFile == 'png' || $typeFile == 'jpg' || $typeFile == 'jpeg' ) {

                $fileSize = $file->getSize();
                if ($fileSize <= 1024000) {
                    $fileName = $file->getClientOriginalName();
                    $file->move('img', $fileName);
                    return $fileName;
                } else {
                    return false;
                }
            } else {
                return false;
            }

        } else {
            return false;
        }

        return $image;
    }


    public function getById($id)
    {
        return $this->_productRepo->getById($id);
    }

    public function update($id, $request)
    {
        $data = $request->only('name', 'pro_rewrite' ,'category_id', 'price',
            'specifications', 'description', 'pro_price_good', 'amount' );
        $image = $this->checkImage($request);
        if ($image) {
            $data['image'] = 'img/'.$image;
        }

        $product = $this->_productRepo->update($id, $data);
        return $product;
    }

    public function delete($id)
    {
        return $this->_productRepo->delete($id);
    }
}
