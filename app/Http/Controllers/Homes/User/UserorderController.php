<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;

class UserorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        session(['userid'=>1]);

        //获取当前登录用户的id
        $uid = session('userid');
        //$uid = 1;

        //查询当前用户的所有订单
        $res = orders::where('uid',$uid)->get();

        //定义一个数组用来储存订单信息(按订单号分组)
        $codearr = array();
        foreach($res as $k=>$v){        //遍历
            
            //查询所有订单号相同的订单详情
            $resinfo = ordersinfo::where('o_code',$v->o_code)->get();

            //放入数组中，key是订单号，value是订单详情
            $codearr[$v->o_code] = $resinfo;
        }

        //定义一个数组存储待付款订单
        $codearr1 = array();
        foreach($codearr as $k1=>$v1){
            $resinfo1 = ordersinfo::where('ostate',0)->get();
            $codearr1[$k1] = $resinfo1;
        }
        $res = 0;
        //将查询信息传到页面中
        return view('homes.user.order',compact('codearr','codearr1','res'));
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
