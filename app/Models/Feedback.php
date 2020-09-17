<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'product_id', 'content',  'number_star', 'datetime',
    ];

    public function getFeedback()
    {
        $result = DB::table($this->table)->get()->toArray();
        return $result;
    }

    public function userFeedback()
    {
        return $this->hasOne(
            'App\User',
            'id',
            'user_id'
        );
    }

    public function productFeedback()
    {
        return $this->hasOne(
            'App\Models\Product',
            'id',
            'product_id'
        );
    }
}
