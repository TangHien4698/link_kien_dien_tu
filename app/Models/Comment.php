<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'product_id', 'content', 'status', 'datetime', 
    ];

    public function getComment()
    {
        $result = DB::table('comments')->get()->toArray();
        return $result;
    }
}
