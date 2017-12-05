<?php

namespace App\Http\model;

use Illuminate\Database\Eloquent\Model;

class collect extends Model
{
    //
    public $table = "collect";
    public $timestamps = false;


    public function shop()
    {
        return $this->hasOne('App\Http\model\shop', 'id', 'sid');
    }

    public function goods()
    {
        return $this->hasOne('App\Http\model\goods', 'id', 'gid');
    }
}
