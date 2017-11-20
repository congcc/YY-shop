<?php

namespace App\Http\model;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    //
    public $table = "orders";

    /*public function orinfo(){
        return $this->hasOne('App\Http\model\ordersinfo', 'o_code', 'o_code');
    }*/

}
