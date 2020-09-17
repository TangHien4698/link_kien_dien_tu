<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $model;

    public function __construct(Order $order)
    {
        $this->model = $order;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->model->with('orderDetail')->get();
        return view('admin.order.index', ['orders' => $orders]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $products = $this->model
                ->join('order_details', 'orders.id', '=', 'order_details.order_id' )
                ->join('products', 'order_details.product_id', '=', 'products.id')
                ->where('orders.id', $id)
                ->select(
                    'order_details.product_id',
                    'order_details.price',
                    'order_details.amount',
                    'products.name'
                )->get();
        $order = $this->model->where('id', $id)->first();
        if (isset($order)) {
            return view('admin.order.detail',
                [
                    'data' => $order,
                    'products' => $products
                ]
            );
        } else {
            flashMessage($request, 'messages.url-not-found', 'alert-danger');
            return back();
        }
    }

    public function delete(Request $request)
    {
        $result = false;
        $deleted = $this->model->where('id', $request->id)->delete();
        if ($deleted) {
            $result = true;
        }

        return response()->json([
            'result' => $result
        ]);
    }

    public function changeState(Request $request)
    {
        $result = false;
        $data = ['state' => $request->state];
        $rowChange = $this->model
            ->where('id', $request->id)
            ->update($data);
        if ($rowChange > 0) {
            $result = true;
        }
        return response()->json([
            'result' => $result
        ]);
    }
}
