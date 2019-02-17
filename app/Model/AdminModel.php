<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $table = 'admin_models';
    public $primaryKey = 'id';
    public $timestamps = true;

    public static function checkAdmin($data){
        $found = Self::where('email',$data['email'])->where('password',$data['password'])->first();
        return $found;
    }
    public static function emailExist($data){
        $verdict = Self::where('email',$data)->first();
        if($verdict)
            return $verdict;
    }
    
    public static function storeAdmin($data){
        $addAdminSuccess = Self::insert(array('fname'=>$data['fname'],'lname'=>$data['lname'],'email'=>$data['email'],'password'=>$data['password']));
        return $addAdminSuccess;
        
    }

    public static function adminList(){
        $verdict = Self::get();
        return $verdict;
    }
}
