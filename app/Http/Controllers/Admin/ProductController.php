<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Contracts\ProductServiceContract;
use App\Services\Contracts\CategoryServiceContract;
use App\Http\Requests\CreateProduct;
use App\Http\Requests\EditProduct;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productModel;
    protected $categoryModel;

    public function __construct(
        Product $productModel,
        Category $categoryModel
    ) {
        $this->productModel = $productModel;
        $this->categoryModel = $categoryModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $products = $this->_productService->getAll();
        $products = $this->productModel->get();
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryData = $this->getDataCategory();
        return view('admin.products.create', ['categories' => $categoryData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProduct $request)
    {
        $data = $request->only('name','pro_rewrite' ,'category_id', 'price',
            'specifications', 'description', 'pro_price_good', 'amount' );
        $image = $this->checkImage($request);
        if ($image) {
            $data['image'] = 'img/'.$image;
        }
        $product = $this->productModel->create($data);
        if ($product) {
            flashMessage($request, __('messages.createSuccess'),'alert-success');
            return redirect()->route('admin.products.index');
        } else {
            flashMessage($request, __('messages.createFail'),'alert-danger');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $product = $this->productModel->where('id', $id)->first();
        if ($product) {
            return view('admin.products.detail', ['product' => $product]);
        } else {
            flashMessage($request, 'Product not found!', 'alert-danger');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryData = $this->getDataCategory();
        $product = $this->productModel->where('id', $id)->first();
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categoryData,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProduct $request, $id)
    {
        $data = $request->only('name', 'pro_rewrite' ,'category_id', 'price',
            'specifications', 'description', 'pro_price_good', 'amount' );
        $image = $this->checkImage($request);
        if ($image) {
            $data['image'] = 'img/'.$image;
        }

        $product = $this->productModel->where('id', $id)->update($data);

        if ($product) {
            flashMessage($request, __('messages.editSuccess'),'alert-success');
            return redirect()->route('admin.products.index');
        } else {
            flashMessage($request, __('messages.editFail'),'alert-danger');
            return back();
        }
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $result = false;
        $producted= $this->productModel->where('id', $id)->delete();
        if ($producted) {
            $result = true;
        }

        return response()->json([
            'result' => $result
        ]);
    }

    public function getDataCategory()
    {
        $categories = $this->productModel->get();
        $categoryData = [];
        foreach ($categories as $key => $category) {
            $categoryData[] = [
                'id' => $category->id,
                'text' => $category->name,
            ];
        }
        return $categoryData;
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
}
