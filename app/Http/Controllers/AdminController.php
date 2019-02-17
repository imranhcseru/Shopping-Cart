<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AdminModel;
use App\Model\Category;
use App\Model\Product;
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
            Session::put('sessionError','You need to login first');
            return view('admin.index');
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

    public function allProduct(){
        $allProduct = Product::allProduct();
        return view('admin.allProduct')->with('products',$allProduct);
    }
    public function addProduct(){
        if($this->checkSession() == TRUE){
            $category = Category::category();
            return view('admin.addProduct')->with('categories',$category);
        }
    }

    public function storeProduct(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['discount'] = $request->discount;
        $data['stock'] = $request->stock;
        $data['totalPrice'] = ceil($data['price'] - ($data['discount'] * $data['price']/100.00));
        $data['category'] = $request->category;
        $data['detail'] = $request->detail;  
        $data['addedby'] = Session::get('adminName');
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload');
            $image->move($destinationPath, $name);
        }
        $data['image'] = $name;
        switch($request->submit) {
            case 'publish': 
                $data['type'] = "published";
                break;
            case 'draft':
                $data['type'] = "draft"; 
                break;
        }

        if(Product::storeProduct($data)){
            Session::put('storeProductSuccess','Product Added Successfuly');
            return Redirect::to('admin/allproduct');
        }
    }
    public function addAdmin(){
        if($this->checkSession() == TRUE){

            return view('admin.addAdmin');
        }
        
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
        if($this->checkSession() == TRUE){
            return view('admin.adminList')->with('admins',$adminList);
        }
        
    }
}
