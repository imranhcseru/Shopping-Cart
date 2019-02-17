<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $primaryKey = 'id';
    public $timestamps = true;
    
    public static function storeProduct($data){
        $verdict = Self::insert(array('name'=>$data['name'],'detail'=>$data['detail'],'stock'=>$data['stock'],'price'=>$data['price'],'discount'=>$data['discount'],'totalPrice'=>$data['totalPrice'],'category'=>$data['category'],'type'=>$data['type'],'image'=>$data['image'],'addedBy'=>$data['addedby']));
        return $verdict;
    }

    public static function allProduct(){
        $verdict = Self::get();
        return $verdict;
    }
}
