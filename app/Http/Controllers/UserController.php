<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
class UserController extends Controller
{
    public function home(){
        $data['electronics'] = Product::electronics();
        return view('user.home')->with('data',$data);
    }
}
