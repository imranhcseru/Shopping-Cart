<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AdminModel;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
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
        $found = AdminModel::checkAdmin($data);
        if($found == TRUE){
            Session::put('adminName','$found->fname');
            Session::put('adminId','$found->id');
            return Redirect::to('admin/home');
        }
        else{
            Session::put('credentialError','Credentials Does Not Matched');
            return Redirect::back();
        }
    }
}
