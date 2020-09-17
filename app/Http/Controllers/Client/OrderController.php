<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Session;
class OrderController extends Controller
{
    protected  $model;
    protected $modelOrder;
    protected $modelOrderDetail;
    public function __construct(Cart $cart, Order $order, OrderDetail $modelOrderDetail)
    {
        $this->model= $cart;
        $this->modelOrder = $order;
        $this->modelOrderDetail = $modelOrderDetail;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function addCart(Request $request)
    {
        if (isUser()) {
            $data = $request->all();
            $soluonginput = $data["soluong"];
            $idPro = $data["idPro"];
            $inforProduct = DB::table('products')->where('id', $idPro)->select('name')->first();
            $namePro = $inforProduct->name;
            $user = Auth::user()->name;
            // check xem product đó có trong gio hàng hay chưa
            $soluong = DB::table('cart')->where('user', $user)->where('product_id',$idPro)->select('soluong')->first();
            if (!is_null($soluong))
            {
                $soluong = $soluong->soluong;
                $soluongupdate = $soluonginput +$soluong;
                DB::table('cart')
                    ->where('user', $user)->where('product_id',$idPro)
                    ->update(['soluong' => $soluongupdate]);
                return true;
            }
            else
            {
                if(Cart::create(['user'=>$user,'product_id'=>$idPro,'pro_name'=>$namePro,'soluong'=>$soluonginput]))
                {
                    return true;
                }
            }

        }
//        else
//        {
//            return "Chua dang nhap";
//        }
    }
    public function viewCart()
    {
        if (isUser()) {
            $user = Auth::user()->name;
            $cart = $this->model->where('user', $user)->with('products')->get();
            return view('client.cart',['Cart'=>$cart]);
        }
       else
       {
           return redirect()->route('user.login');
       }
    }
    public function viewxacnhan()
    {
        $user = Auth::user()->name;
        $infor = DB::table('users')->where('username', $user)->select('name','email','phone_number','address')->first();
        $cart = $this->model->where('user', $user)->with('products')->get();
        return view('client.xacnhan',['infor'=>$infor,'Cart'=>$cart]);
    }
    public function thanhtoan(Request $request)
    {
//         dd($request->all());
         $input = $request->all();
        $user = Auth::user()->name;
        $cart = $this->model->where('user', $user)->with('products')->get();
        $user = $request->all();

        $totalMoney = 0;
//        dd($request->all());
        DB::beginTransaction();
        try {

            $data = [
                'state' => 0,
                'receiver_name' => $user['name'],
                'receiver_phone_number' => $user['phone'],
                'receiver_address' => $user['address'],
                'Verification' => $user['_token']
            ];
            $order = $this->modelOrder->create($data);

            if ($order) {
                foreach ($cart as $key => $val) {
                    $dataOrderDetail = [
                        'order_id' => $order->id,
                        'product_id' => $val->product_id,
                        'price' => $val->products->toArray()[0]['price'],
                        'amount' => $val->soluong
                    ];
                    $orderDetail = $this->modelOrderDetail->create($dataOrderDetail);
                    $totalMoney = $totalMoney + $val->soluong * (double)$val->products->toArray()[0]['price'];
                }

                $dataUd = [
                    'total_money' =>  $totalMoney
                ];
                $orderUd = $this->modelOrder->where('id', $order->id)->update($dataUd);
            }
            $this->model->where('user', $val->user )->delete();


            DB::commit();
            $mahoadon = DB::table('orders')->orderBy('id','desc')->limit(1)->get()->toArray();
            $mahoadon = $mahoadon[0]->id;
            Session::forget('mahoadon');
            Session::put('mahoadon', $mahoadon);
            if ($input["payment_method_id"] == 1)
            {
                return redirect()->route('return');
            }
            else
            {
//                dd($totalMoney);
                $tittle = "Thanh toan truc tuyen";
                $virtualPaymentClientURL = "https://mtf.onepay.vn/vpcpay/vpcpay.op";
                $vpc_Merchant = "TESTONEPAY"; // id Merchant do Onepay cung cap
                $vpc_AccessCode = "6BEB2546"; // do Onepay cung cap
                // ma giao dich, moi lan giao dich phai sinh 1 ma moi gui sang onepay
                $vpc_OrderInfo = $mahoadon; // ma don hang hoặc thông tin đơn hàng hoặc mô tả ngắn gọn về đơn hàng
                $vpc_Amount = $totalMoney * 100; // gửi tổng tiền cần thanh toán cho onepay
                $vpc_ReturnURL = url('return'); // gửi URL để nhận data trả về
                $vpc_Version = "2"; // version module cổng thanh toán
                $vpc_Command = "pay";
                $vpc_Locale = "en";
                $vpc_TicketNo = "::" . $mahoadon;// gửi cổng thanh toán của khách hàng lên cho onepay, các cổng thanh toán k dk trùng nhau, lấy luôn mã id của đơn tour

                // $url_hientai = get_the_permalink();
//                    $ram = date('YmdHis') . rand();
//                    var_dump($ram);
//                    var_dump($num_new);

//                    $sql_update_vpcMerchTxnRef = "UPDATE ama_tour_book SET vpc_MerchTxnRef = $ram WHERE id = $num_new";
//                    $sql_update_vpcMerchTxnRef = "UPDATE ama_tour_book SET vpc_MerchTxnRef = '$ram' WHERE id = $num_new";
//                    $wpdb->query($sql_update_vpcMerchTxnRef);
//                    print_r($sql_update_vpcMerchTxnRef);
//                    die();
//                echo $ram;
//                die();
                $cong = "::" . $mahoadon;
                $array_data = array(
                    "Title" => $tittle,
                    "vpc_Merchant" => $vpc_Merchant,
                    "vpc_AccessCode" => $vpc_AccessCode,
                    "vpc_MerchTxnRef" => $mahoadon,
                    "vpc_OrderInfo" => $vpc_OrderInfo,
                    "vpc_Amount" => $vpc_Amount,
                    "vpc_ReturnURL" => $vpc_ReturnURL,
                    "vpc_Version" => $vpc_Version,
                    "vpc_Command" => $vpc_Command,
                    "vpc_Locale" => $vpc_Locale,
                    "vpc_TicketNo" => $cong,
                    'vpc_Currency' => 'VND',
                );

                $SECURE_SECRET = "6D0870CDE5F24F34F3915FB0045120DB";
// add the start of the vpcURL querystring parameters
                $vpcURL = "https://mtf.onepay.vn/vpcpay/vpcpay.op" . "?";

// Remove the Virtual Payment Client URL from the parameter hash as we
// do not want to send these fields to the Virtual Payment Client.
                unset($array_data["virtualPaymentClientURL"]);

// The URL link for the receipt to do another transaction.
// Note: This is ONLY used for this example and is not required for
// production code. You would hard code your own URL into your application.

// Get and URL Encode the AgainLink. Add the AgainLink to the array
// Shows how a user field (such as application SessionIDs) could be added
                $array_data['AgainLink'] = urlencode($_SERVER['HTTP_REFERER']);
//$array_data['AgainLink']=urlencode($_SERVER['HTTP_REFERER']);
// Create the request to the Virtual Payment Client which is a URL encoded GET
// request. Since we are looping through all the data we may as well sort it in
// case we want to create a secure hash and add it to the VPC data if the
// merchant secret has been provided.
//$md5HashData = $SECURE_SECRET; Khởi tạo chuỗi dữ liệu mã hóa trống
                $md5HashData = "";
                // print_r($array_data); die();
                ksort($array_data);
//                    print_r($array_data);die();
// set a parameter to show the first pair in the URL
                $appendAmp = 0;

                foreach ($array_data as $key => $value) {

                    // create the md5 input and URL leaving out any fields that have no value
                    if (strlen($value) > 0) {

                        // this ensures the first paramter of the URL is preceded by the '?' char
                        if ($appendAmp == 0) {
                            $vpcURL .= urlencode($key) . '=' . urlencode($value);
                            $appendAmp = 1;
                        } else {
                            $vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
                        }
                        //$md5HashData .= $value; sử dụng cả tên và giá trị tham số để mã hóa
                        if ((strlen($value) > 0) && ((substr($key, 0, 4) == "vpc_") || (substr($key, 0, 5) == "user_"))) {
                            $md5HashData .= $key . "=" . $value . "&";
                        }
                    }
                }
//xóa ký tự & ở thừa ở cuối chuỗi dữ liệu mã hóa
                $md5HashData = rtrim($md5HashData, "&");
// Create the secure hash and append it to the Virtual Payment Client Data if
// the merchant secret has been provided.
                if (strlen($SECURE_SECRET) > 0) {
                    //$vpcURL .= "&vpc_SecureHash=" . strtoupper(md5($md5HashData));
                    // Thay hàm mã hóa dữ liệu
                    $vpcURL .= "&vpc_SecureHash=" . strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*', $SECURE_SECRET)));
                }
                return redirect($vpcURL);
            }


        } catch(Exception $ex) {
            DB::rollBack();
            return false;
        }
    }
    public function isSuccess()
    {
        $mahoadon = Session::get('mahoadon');
//        dd($mahoadon);
        $inforHoaDon = DB::table('orders')->where('id',$mahoadon)->first();
//        dd($inforHoaDon);
        return view('client.isSuccess',['inforProduct'=>$inforHoaDon]);
    }
    public function deleteCart(Request $request)
    {
        $data = $request->all();
        $idPro = $data["idCategory"];
//        $inforProduct = DB::table('products')->where('id', $idPro)->select('name')->first();
//        $namePro = $inforProduct->name;
        $user = Auth::user()->name;
        // check xem product đó có trong gio hàng hay chưa
        $data = DB::table('cart')->where('user', $user)->where('product_id',$idPro)->delete();
        return $data;
    }
}
