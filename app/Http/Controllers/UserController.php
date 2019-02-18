<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use Session;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
    public function home(){
        $data['flashSale'] = Product::flashSale();
        $data['electronics'] = Product::electronics();
        $data['beautyAndHealth'] = Product::beautyAndHealth();
        $data['babiesAndToys'] = Product::babiesAndToys();
        $data['sportsAndOutdoor'] = Product::sportsAndOutdoor();
        $data['mensFashion'] = Product::mensFashion();
        $data['womensFashion'] = Product::womensFashion();
        return view('user.home')->with('data',$data);
    }

    public function addToCart(Request $request){
        $prodOnCart = $request->prodOnCart;
        $prodId = $request->prodId;
        $prodOnCart = $prodOnCart +1;
        Session::put('prodOnCart',$prodOnCart);
        Session::push('prodId', $prodId);
    }

    public function cart(){
        $data = array();
        $data['flashSale'] = Product::flashSale();
        $cartProdId = Session::get('prodId');
        $data['length'] = sizeof($cartProdId);
        //echo gettype($data['length']);
        // 
        for ($id = 0;$id<sizeof($cartProdId);$id++){
            $data[$id] = Product::getCartProduct($cartProdId[$id]); 
        }
        return view('user.cart')->with('data',$data);
    }
}
