<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $table = 'admin_models';
    public $primaryKey = 'id';
    public $timestamps = true;

    public static function checkAdmin($data){
        $found = $this->where('email',$data['email'])->where('password',$data['password'])->first();
        return $found;
    }
}
