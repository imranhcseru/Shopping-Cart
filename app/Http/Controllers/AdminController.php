<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AdminModel;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{   
    public function checkSession(){
        if(Session::has('adminName')){
            return TRUE;
        }
        else{
            echo "login first";
            //Session::put('sessionError','You need to login first');
            //return view('admin.index');
        }
    }

    public function index(){
        return view('admin.index');
    }

    public function checkAdmin(Request $request){
        $data  = array();
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $found = AdminModel::checkAdmin($data);
        
        if($found == TRUE){
            Session::put('adminName',$found->fname);
            Session::put('adminId',$found->id);
            return Redirect::to('admin/home');
        }
        else{
            Session::put('credentialError','Credentials Does Not Matched');
            return Redirect::back();
        }
    }

    public function home(){
        if($this->checkSession() == TRUE){
            return view('admin.layout');
        } 
    }

    public function logout(){
        session()->flush(); 
        return Redirect::to('admin');
    }
    public function addAdmin(){
        return view('admin.addAdmin');
    }

    public function storeAdmin(Request $request){
        $data  = array();
        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['con_password'] = $request->con_password;
        if($data['password'] != $data['con_password']){
            Session::put('passwordError','Password does not match');
            return Redirect::back();
        }
        else{
            $emailExist = AdminModel::emailExist($data['email']);
            if($emailExist == TRUE){
                Session::put('emailError','Email Already Exist');
                return Redirect::back();
            }
            else{
                AdminModel::storeAdmin($data);
                return Redirect::to('admin/adminlist')->with('addAdminSuccess','Admin Added Successfully');
            }
        }
        
    }

    public function adminList(){
        $adminList = AdminModel::adminList();
        return view('admin.adminList')->with('admins',$adminList);
    }
}
