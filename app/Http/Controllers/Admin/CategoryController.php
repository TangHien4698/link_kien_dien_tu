<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Contracts\CategoryServiceContract;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $_categoryService;
    protected $model;

    public function __construct(CategoryServiceContract $categoryService, Category $category)
    {
        $this->_categoryService = $categoryService;
        $this->model = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->model->get();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'cat_rewrite' => $request->cat_rewrite
        ];

        $category = $this->model->create($data);
        $result = false;

        if ($category) {
            $result = true;
        }

        $dataRowCategory = view('admin.categories.bodyTbl',
            [
                'category' => $category
            ])
            ->render();

        return response()->json([
            'result' => $result
            ,'dataRowCategory' => $dataRowCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = [
            'name' => $request->name,
            'cat_rewrite' => $request->rewrite
        ];
        $id = $request->id;
        $category = $this->model->where('id', $id)->update($data);
        $result = false;

        if ($category) {
            $result = true;
        }

        return response()->json([
            'result' => $result,
        ]);
    }

    public function delete(Request $request)
    {
        $result = false;
        $id = $request->id;
        $category = $this->model->where('id', $id)->delete($id);

        if ($category) {
            $result = true;
        }

        return response()->json([
            'result' => $result
        ]);
    }
}
