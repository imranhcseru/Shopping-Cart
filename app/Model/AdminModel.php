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
        $data['created_at'] = $data['updated_at']= date('Y-m-d');
        $addAdminSuccess = Self::insert(array('fname'=>$data['fname'],'lname'=>$data['lname'],'email'=>$data['email'],'password'=>$data['password'],'created_at'=>$data['created_at'],'updated_at'=>$data['updated_at']));
        return $addAdminSuccess;
        
    }

    public static function adminList(){
        $verdict = Self::get();
        return $verdict;
    }
}
