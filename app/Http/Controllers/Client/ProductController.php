<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name,$id)
    {
        $link = $name.'-p'.$id.".html";
        if(DB::table('products')->where('pro_rewrite',$link)->exists())
        {
            // data tồn tại
            $inforProduct = DB::table('products')->where('pro_rewrite',$link)->first();
//            get comment
            $comment = DB::table('feedbacks')->where('product_id',$id)->get()->toArray();

//            dd($comment);
            $datatruyendi = [];
            $count = 0;
            $sosao = 0;
            $dem1 = 0;
            $dem2 =0;
            $dem3 = 0;
            $dem4 = 0;
            $dem5 = 0;
            foreach ($comment as $value)
            {
                $count++;
                $sosao += $value->number_star;
                if ($value->number_star == 1)
                {
                    $dem1++;
                }
                elseif ($value->number_star == 2)
                {
                    $dem2++;
                }
                elseif ($value->number_star == 3)
                {
                    $dem3++;
                }
                elseif ($value->number_star == 4)
                {
                    $dem4++;
                }
                elseif ($value->number_star == 5)
                {
                    $dem5++;
                }
            }
            if($count != 0 )
            {
                $datatruyendi['medium'] = round($sosao/$count,1);
            }
            else
            {
                $datatruyendi['medium'] = 0;
            }
            $datatruyendi['count'] = $count;
            $datatruyendi['star1'] = $dem1;
            $datatruyendi['star2'] = $dem2;
            $datatruyendi['star3'] = $dem3;
            $datatruyendi['star4'] = $dem4;
            $datatruyendi['star5'] = $dem5;
            return view('client.detail',["inforProduct"=>$inforProduct,'dataStar'=>$datatruyendi,'dataComment'=>$comment]);
        }
        else
        {
            return view('errors.404');
        }

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
    public function filterProduct(Request $request)
    {
        $data = $request->all();
        $rewriteCategory = $data["category"];
        $idCategory = DB::table('categories')->where('cat_rewrite',$rewriteCategory)->select('id')->first();
        $arrdata = explode("-",$data["type"]);
        $listProduct = DB::table('products')->where('category_id',$idCategory->id)->orderBy($arrdata[0], $arrdata[1])->get()->toArray();
        return view('client.orderproduct',['listProduct'=>$listProduct]);
    }
    public function star(Request $request)
    {
        $data = $request->all();
        $numberstar = $data["star"];
        $content = $data["content"];
        $idMaSanPham = $data["id_sanpham"];

        if (isUser())
        {
            $user = Auth::user()->name;
            $id = DB::table('users')->where('username',$user)->select('id')->first()->id;
            $pro_rewrite = DB::table('products')->where('id',$idMaSanPham)->select('pro_rewrite')->first();

            $user = Feedback::create(['user_id'=>$id,'product_id'=>$idMaSanPham,'content'=>$content,'number_star'=>$numberstar]);
            if($user)
            {
                return redirect('products/'. $pro_rewrite->pro_rewrite);
            }
        }
        else
        {
            Auth::logout();
            return redirect()->route('user.login');
        }
    }
}
