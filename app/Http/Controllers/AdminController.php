<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
    }

    public function home(){
        return view('admin.layout');
    }
}
