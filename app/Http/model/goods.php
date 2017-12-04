<?php

namespace App\Http\model;

use Illuminate\Database\Eloquent\Model;

class goods extends Model
{
    //
    public $table = "goods";
    public $timestamps = false;

     public function goodstags()
    {
        return $this->hasOne('App\Http\model\goodstags', 'cateid', 'clid');
    }
}
