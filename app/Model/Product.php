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

    public static function publishedProduct(){
        $verdict = Self::get()->where('type','published');
        return $verdict; 
    }

    public static function draftProduct(){
        $verdict = Self::get()->where('type','draft');
        return $verdict; 
    }
//For User Panel
    public static function flashSale(){
        $verdict = Self::where('discount', '>=', 1)->orderBy('discount','DESC')->limit(5)->get();
        return $verdict;
    }

    public static function electronics(){
        $verdict = Self::where('category','Electronics')->limit(5)->get();
        return $verdict;
    }

    public static function beautyAndHealth(){
        $verdict = Self::where('category','Beauty & Health')->limit(5)->get();
        return $verdict;
    }

    public static function babiesAndToys(){
        $verdict = Self::where('category','Babies & Toys')->limit(5)->get();
        return $verdict;
    }

    public static function sportsAndOutdoor(){
        $verdict = Self::where('category','Sports & Outdoor')->limit(5)->get();
        return $verdict;
    }

    public static function mensFashion(){
        $verdict = Self::where('category','Mens Fashion')->limit(5)->get();
        return $verdict;
    }

    public static function womensFashion(){
        $verdict = Self::where('category','Womens Fashion')->limit(5)->get();
        return $verdict;
    }

    public static function getCartProduct($id){
        $verdict = Self::where('id',$id)->first();
        return $verdict;
    }
}
