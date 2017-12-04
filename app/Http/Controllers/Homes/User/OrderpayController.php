<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;

class OrderpayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($code)
    {
        //根据传过来的订单号查询该订单信息
        $res = orders::where('o_code',$code)->first();

        //获取验证码
        $code = $code;

        //获取该用户手机号
        $phone = $res->oruser->phone;

        //获取店铺名字
        $sname = $res->orshop->sname;

        //获取商品名字
        $gname = $res->ordersinfo->orgoods->gname;

        //跳转支付页面
        return view('homes.user.orderpay',compact('res','phone','sname','gname','code'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $time = time();
        $code = $request->input('code');
        orders::where('o_code',$code)->update(['ostate'=>1]);
        ordersinfo::where('o_code',$code)->update(['ostate'=>1,'pay_time'=>$time]);
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
