<?php

namespace App\Http\model;

use Illuminate\Database\Eloquent\Model;

class shopcar extends Model
{
    //
    protected $table = "shopcar";
    public $timestamps = false;

    public function carshop()
    {
        return $this->hasOne('App\Http\model\shop', 'id', 'sid');
    }

    public function cargoods()
    {
        return $this->hasOne('App\Http\model\goods', 'id', 'gid');
    }

}
