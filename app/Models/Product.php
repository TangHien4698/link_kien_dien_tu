<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    protected $table = 'products';
    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','category_id',
        'price', 'image', 'description',
        'specifications', 'pro_price_good', 'pro_rewrite', 'amount',
    ];

    public function getProduct()
    {
        $result = DB::table('products')->get()->toArray();
        return $result;
    }

    public function category()
    {
        return $this->hasOne(
            'App\Models\Category',
            'id',
            'category_id'
        );
    }
    public function getProductPriceGood()
    {
        $result = DB::table('products')->where('pro_price_good',1)->get()->toArray();
        return $result;
    }
    public function getProductNew()
    {
        $result = DB::table('products')->orderBy('created_at', 'asc')->limit(20)->get()->toArray();
        return $result;
    }
}
