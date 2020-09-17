<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
//        dd(1234);
        $modelCategory = new Category();
        $listCategory = $modelCategory->getCategory();
        $idCategory = Category::where('cat_rewrite', '=', $slug)->select('id')->get()->toArray();

        if (count($idCategory) > 0) {
            //  found
            $listProduct = Product::where('category_id', '=', $idCategory[0]["id"])->paginate(20);
            $listInforProduct = $listProduct->toArray();
            $listInforProduct = $listInforProduct["data"];
//            dd($listProduct);
            // return view Category
            return view('client.category',['listCategory'=>$listCategory,'listProduct'=>$listInforProduct,'listProductPagion'=>$listProduct]);
        }
        else
        {
            // return 404
            return view('errors.404');
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function  filterProductwithCategory(Request $request)
    {
        $data = $request->all();
        $idCategory = $data["idCategory"];
        $listProduct = Product::where('category_id', '=',$idCategory)->get()->toArray();
        return view('client.filterProduct',['listProduct'=>$listProduct]);
    }
}
