<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Category extends Model
{
    protected $table = 'categories';
    public $timestamp = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cat_rewrite'
    ];

    public function getCategory()
    {
        $result = DB::table($this->table)->get()->toArray();
        return $result;
    }

}
