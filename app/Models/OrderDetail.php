<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Model
{
   	protected $table = 'order_details';
    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id', 'price', 'amount',
    ];

    public function getOrderDetail()
    {
        $result = DB::table('order_details')->get()->toArray();
        return $result;
    }
}
