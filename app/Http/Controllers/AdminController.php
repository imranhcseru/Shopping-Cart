<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AdminModel;
class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function home(){
        return view('admin.layout');
    }

    public function checkAdmin(Request $request){
        $data  = array();
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        AdminModel::checkAdmin($data);
    }
}
