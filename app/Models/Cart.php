<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Cart extends Model
{
protected $table = 'cart';
public $timestamp = false;

/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'user', 'product_id','pro_name','soluong'
];
public function products(){
    return $this->hasMany(
        'App\Models\Product',
        'id',
        'product_id'
    );
}
}
