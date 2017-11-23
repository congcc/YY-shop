<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class goodscate extends Model
{
    protected $table = "goodscate";


    public function two($id)//此id是截取的第一个数
    {
        return  goodscate::where('pid','like',$id.'%000')->get();
    	 
    } 

    public function three($id)//此id是截取的前三位数
    {
    	return goodscate::where('pid','like',$id.'%')->get();
    } 
}
