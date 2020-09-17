<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        dd(Auth::user()->name);
        $modelProduct = new Product();
        $listProductPriceGood = $modelProduct->getProductPriceGood();
        $modelCategory = new Category();
        $listCategory = $modelCategory->getCategory();
        $listProductNew = $modelProduct->getProductNew();
//        dd($listProductNew);
        return view('client.home',['listProductPriceGood'=>$listProductPriceGood,'listCategory'=>$listCategory,'listProductNew'=>$listProductNew]);
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
    public function login()
    {
        return view('client.login');
    }
    public function register()
    {
        return view('client.register');
    }
    public function accessregister(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $confirmeamil = $request->input('confirm-email');
        $address = $request->input('address');
        $user = $request->input('username');
        $password = $request->input('password');
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:30',
            'email' =>'required|unique:users|regex:/^.+@.+$/i',
            'confirm-email' =>'required|regex:/^.+@.+$/i',
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',
            'address'=>'required|max:200',
            'username'=>'required|unique:users|min:5|max:200',
            'password'=>'required|min:5|max:200'
        ]);
        if ($email == $confirmeamil)
        {
            $password = Hash::make($password);
            $user = User::create(['name'=>$name,'email'=>$email,'address'=>$address,'username'=>$user,'phone_number'=>$phone,'password'=>$password,'role'=>1]);
            if($user)
            {
                return redirect()->route('user.login');
            }
        }
        else
        {
            return redirect()->route('DangKy', ['error' => "error_email"]);
        }
    }
    public function canhan()
    {
        $user = Auth::user()->name;
        $HoaDon = DB::table('orders')->where('receiver_name',$user)->orderBy('created_at', 'desc')->get()->toArray();
        return view('client.canhan',['hoadon'=>$HoaDon]);
    }
    public function search(Request $request)
    {
        $data = $request->all();
        $search = $data["q"];
        $resultSearch = DB::table('products')
            ->where('name', 'like', '%'.$search.'%')
            ->get();
        return view('client.search',['search'=>$resultSearch]);


    }
}
