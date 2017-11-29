<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\model\orders;
use App\Http\model\ordersinfo;

class OrderinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         // dd($id);
        //根据传过来的订单号查询该订单信息
        $res = orders::where('o_code',$id)->first();

        //根据传过来的订单号查询该订单详细信息
        $resinfo = ordersinfo::where('o_code',$id)->get();

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
        return view('homes/seller/ordersinfo',compact('phone','nickname','address','res','resinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
