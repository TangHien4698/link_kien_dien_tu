<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamp = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','total_money', 'Verification', 'state', 'receiver_name',
        'receiver_phone_number', 'receiver_address',
    ];

    public function getOrder()
    {
        $result = DB::table($this->table)->get()->toArray();
        return $result;
    }

    public function orderDetail()
    {
        return $this->hasMany(
            'App\Models\OrderDetail',
            'order_id',
            'id'
        );
    }

    public function product()
    {
        return $this->hasManyThrough(
            'App\Models\Product',
            'App\Models\OrderDetail',
            'order_id',
            'id',
            'id',
            'product_id'
        );
    }
}
