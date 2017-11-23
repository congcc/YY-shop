<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;

class OrdersinfoController extends Controller
{
    //
    public function index($code)
    {	
    	//根据传过来的订单号查询该订单信息
    	$res = orders::where('o_code',$code)->first();

    	//根据传过来的订单号查询该订单详细信息
    	$resinfo = ordersinfo::where('o_code',$code)->get();

    	//获取用户id
    	$uid = $res->oruser->id;

    	//获取用户电话
    	$phone = $res->oruser->phone;

    	//获取用户昵称
    	$nickname = $res->oruserinfo->nickname;

    	//获取该订单的收货地址
    	$address = $res->ordersinfo->oraddress->address;

    	//将其从json字符串转换为数组
    	$address = json_decode($address,true);
    	
    	//跳转到订单详情页面
    	return view('homes/user/orderinfo',compact('phone','nickname','address','res','resinfo'));
    }
}
