<?php

namespace App\Http\model;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    //
    public $table = "orders";

    public function oruser(){
        return $this->hasOne('App\Http\model\user', 'id', 'uid');
    }

    public function oruserinfo(){
        return $this->hasOne('App\Http\model\userinfo', 'id', 'uid');
    }

    public function oraddress(){
        return $this->hasOne('App\Http\model\address', 'id', 'o_addr');
    }

    public function ordersinfo(){
        return $this->hasOne('App\Http\model\ordersinfo', 'o_code', 'o_code');
    }

}
