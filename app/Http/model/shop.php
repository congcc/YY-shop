<?php

namespace App\Http\model;

use Illuminate\Database\Eloquent\Model;


class shop extends Model
{
    //
    public $table = "shop";
    public $timestamps = false;

    public function cateone()
    {
        return $this->hasOne('App\Http\model\cateone', 'id', 'stype');
    }

    
}
