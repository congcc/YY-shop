<?php

namespace App\http\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
     protected $table = "user";

     public function userinfo()
     {
        return $this->hasOne('App\Http\model\userinfo','id','id');
     }

}


