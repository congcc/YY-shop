<?php

namespace App\Http\model;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    //
    public $table = "review";

     public function goods(){
        return $this->hasOne('App\Http\model\goods', 'id', 'gid');
    }

}
