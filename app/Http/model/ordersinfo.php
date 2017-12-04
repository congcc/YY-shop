<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class ordersinfo extends Model
{
    //
    public $table = "ordersinfo";

    public $timestamps = false;
    public function orgoods(){
        return $this->hasOne('App\Http\model\goods', 'id', 'gid');
    }
    public function oraddress(){
        return $this->hasOne('App\Http\model\address', 'id', 'o_addr');
    }
    
    public function shop(){
        return $this->hasOne('App\Http\model\shop','id', 'sid');
    }

    public function order(){
        return $this->hasOne('App\Http\model\orders','o_code','o_code');
    }
}
