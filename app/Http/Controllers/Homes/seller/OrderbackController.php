<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\shop;
use App\Http\model\ordersinfo;


class OrderbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //查询当前登录用户id
        $id=session('userid');
         // dd($id);
        //通过id判断除商户id  //数组对象型
        $usr=shop::where('uid',$id)->get();
        // dd($sid);
        //获取商户id
        $sid=$usr['0']->id;

        // dd($sid);

        //取出订单表中该商户的所有订单
        $res=orders::where('sid',$sid )->get();


        // dd($res);
        $re6=array();       //定义一个空数组  6申请退款

        foreach($res as $k => $v){

            $resinfo6=ordersinfo::where('o_code',$v->o_code)->get();  //取出ordersinfo中 订单号和orders相等的订单详情  写入数组

                foreach($resinfo6 as $k6 => $v6){  //遍历取详情

                    if($v6->ostate==6){  //取状态为6 的申请退款的账单
                    $re6[$v->o_code]=$resinfo6;   //写入数组  O_code为k   info表详情为value
                                      }
                                               }
                                  }

  

        $re7=array();       // 7 卖家退款

        foreach($res as $k => $v){

                $resinfo7=ordersinfo::where('o_code',$v->o_code)->get();

                    foreach($resinfo7 as $k7 => $v7){

                        if($v7->ostate==7){
                        $re7[$v->o_code]=$resinfo7;
                                          }
                                                   }
                                      }

                    // dd($re7);

        $re8=array();       // 8 订单完成

        foreach($res as $k => $v){

                $resinfo8=ordersinfo::where('o_code',$v->o_code)->get();

                    foreach($resinfo8 as $k8 => $v8){

                        if($v8->ostate==8){
                        $re8[$v->o_code]=$resinfo8;
                                          }
                                                   }
                                      }
                                      // dd($re8);

// dd($re6);

    return view('homes.seller.orderback',compact('re6','re7','re8'));  //compact传值 
        
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
        // var_dump($id);
        $update =['ostate'=>'7'];

        $up=ordersinfo::where('o_code',$id)->update($update);
        $ud=orders::where('o_code',$id)->update($update);
        // dd($ud);
         if($up && $ud){
             return redirect('home/seller/orderback');
         }else{
             return back();
         }

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
        // dd($k7);
        $update=['ostate'=>'8'];

        $up=ordersinfo::where('o_code',$id)->update($update);
        $ud=orders::where('o_code',$id)->update($update);

        if($up && $ud){
             return redirect('home/seller/orderback');
         }else{
             return back();
         }
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
