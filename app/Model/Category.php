<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    protected $table = 'categories';
    public $primaryKey = 'id';
    public $timestamps = true;

    public static function category(){
        $verdict = Self::get();
        return $verdict;
    }
}
