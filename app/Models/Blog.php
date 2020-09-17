<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'image', 'content', 'date',
    ];

    public function getProductType()
    {
        $result = DB::table($this->table)->get()->toArray();
        return $result;
    }
}
