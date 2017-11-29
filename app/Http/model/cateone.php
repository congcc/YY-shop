<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class cateone extends Model
{

    public $table = "cateone";
    public $timestamps = false;

     public function catetwo()
    {
        return $this->hasOne('App\Http\model\catetwo', 'id', 'pid');
    }


}
