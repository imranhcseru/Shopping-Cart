<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $table = 'admin_models';
    public $primaryKey = 'id';
    public $timestamps = true;
}
