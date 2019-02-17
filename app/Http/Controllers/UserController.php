<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
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
}
