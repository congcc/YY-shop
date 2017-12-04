<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class cateone extends Model
{

    public $table = "cateone";
    public $timestamps = false;

     public function catetwo()
    {
        return $this->hasMany('App\Http\model\catetwo', 'pid', 'id');
    }


}
