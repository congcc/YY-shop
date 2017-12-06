<?php

namespace App\Http\model;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    //
    public $table = "review";
    public $timestamps = false;


    public function goods(){
        return $this->hasOne('App\Http\model\goods', 'id', 'gid');
    }


    public function reuserinfo(){
        return $this->hasOne('App\Http\model\userinfo', 'id', 'uid');
    }


    public function gg(){
        return $this->hasOne('App\Http\model\userinfo', 'id', 'uid');
    }

    public function xs(){
        return $this->hasOne('App\Http\model\orders', 'id', 'oid');
    }


}
