<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        dd('home');
//        $modelProduct = new Product();
//        $listProductPriceGood = $modelProduct->getProductPriceGood();
//        $modelCategory = new Category();
//        $listCategory = $modelCategory->getCategory();
//        $listProductNew = $modelProduct->getProductNew();
////        dd($listProductNew);
//        return view('client.home',['listProductPriceGood'=>$listProductPriceGood,'listCategory'=>$listCategory,'listProductNew'=>$listProductNew]);
    }
}
