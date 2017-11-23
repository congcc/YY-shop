<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\user;
use App\Http\model\shop;

use App\Http\model\ordersinfo;
use App\Http\model\orders;

class OrdereditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = session('userid');

        $shop=shop::where('uid',$uid)->first();

        $sid=$shop['id'];

       //获取本商家的所有订单
        $info=ordersinfo::where('sid',$sid)->get();
        // dd($info);

         //定义一个数组用来储存订单信息(按订单号分组)
        $codearr = array();
        foreach($info as $k=>$v){        //遍历
            
            //查询所有订单号相同的订单详情
            $resinfo = ordersinfo::where('o_code',$v->o_code)->get();

            //放入数组中，key是订单号，value是订单详情

            $codearr[$v->o_code] = $resinfo;
            // 
        }



        //定义一个数组来存放所有为发货的订单(按订单号分组)

        $ncodearr = array();

        foreach ($info as $key => $value) {

             //查询所有订单号相同的订单详情
            $resinfo = ordersinfo::where('o_code',$value->o_code)->get();

            //把未发货的订单放入一个数组
            foreach ($resinfo as $key => $v) {
                if($v->ostate==1){
                $ncodearr[$value->o_code]=$resinfo;
                }
            }

            
        }
      


        //定义一个数组来存放代收款的订单

         $ngcodearr = array();

        foreach ($info as $key => $value) {

             //查询所有订单号相同的订单详情
            $resinfo = ordersinfo::where('o_code',$value->o_code)->get();

            //把未发货的订单放入一个数组
            foreach ($resinfo as $key => $v) {
                if($v->ostate==0){
                $ngcodearr[$value->o_code]=$resinfo;
                }
            }

            
        }



        //定义一个数组待收货的订单

        $dorder = array();
            
         foreach ($info as $key => $value) {

             //查询所有订单号相同的订单详情
            $resinfo = ordersinfo::where('o_code',$value->o_code)->get();

            //把未发货的订单放入一个数组
            foreach ($resinfo as $key => $v) {
                if($v->ostate==2){
                $dorder[$value->o_code]=$resinfo;
                }
            }

            
        }



          //定义一个数组待取消的订单

        $qorder = array();
            
         foreach ($info as $key => $value) {

             //查询所有订单号相同的订单详情
            $resinfo = ordersinfo::where('o_code',$value->o_code)->get();

            //把未发货的订单放入一个数组
            foreach ($resinfo as $key => $v) {
                if($v->ostate==5){
                $qorder[$value->o_code]=$resinfo;
                }
            }

            
        }
      

        






        return view('homes.seller.orderedit',['codearr'=>$codearr,'ncodearr'=>$ncodearr,'ngcodearr'=>$ngcodearr,'dorder'=>$dorder,'qorder'=>$qorder]);
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
