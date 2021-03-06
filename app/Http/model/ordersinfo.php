<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class ordersinfo extends Model
{
    //
    public $table = "ordersinfo";
    public function orgoods(){
        return $this->hasOne('App\Http\model\goods', 'id', 'gid');
    }
    public function oraddress(){
        return $this->hasOne('App\Http\model\address', 'id', 'o_addr');
    }
    
    public function shop(){
        return $this->hasOne('App\Http\model\shop','id', 'sid');
    }
}
