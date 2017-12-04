<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;
use App\Http\model\pay;
use DB;
use Hash;

class UserorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()     //加载订单页面
    {   
        //获取当前登录用户的id
        $uid = session('userid');
        
        //前台计算总价的变量
        $to = 0;
        $to1 = 0;
        $to2 = 0;
        $to3 = 0;
        $to4 = 0;

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

        //获取所有订单状态为0的订单信息(待付款)       
        foreach($res as $k=>$v){        //遍历
            
            //查询所有订单号相同的订单详情
            $resinfo1 = ordersinfo::where('o_code',$v->o_code)->get();
            foreach($resinfo1 as $k1=>$v1){          //遍历
                if($v1->ostate==0){         //判断是否ostate是否为0，为0才放入数组
                    $codearr1[$v->o_code] = $resinfo1;        //放入数组中，key是订单号，value是订单详情
                }
            }
        }

        //定义一个数组存储待发货订单
        $codearr2 = array();

        //获取所有订单状态为1的订单信息(待发货)       
        foreach($res as $k=>$v){        //遍历
            
            //查询所有订单号相同的订单详情
            $resinfo2 = ordersinfo::where('o_code',$v->o_code)->get();
            foreach($resinfo2 as $k2=>$v2){          //遍历
                if($v2->ostate==1){         //判断是否ostate是否为0，为0才放入数组
                    $codearr2[$v->o_code] = $resinfo2;        //放入数组中，key是订单号，value是订单详情
                }
            }
        }

        //定义一个数组存储待收货订单
        $codearr3 = array();

        //获取所有订单状态为2的订单信息(待收货)       
        foreach($res as $k=>$v){        //遍历
            
            //查询所有订单号相同的订单详情
            $resinfo3 = ordersinfo::where('o_code',$v->o_code)->get();
            foreach($resinfo3 as $k3=>$v3){          //遍历
                if($v3->ostate==2){         //判断是否ostate是否为0，为0才放入数组
                    $codearr3[$v->o_code] = $resinfo3;        //放入数组中，key是订单号，value是订单详情
                }
            }
        }

        //定义一个数组存储待评价订单
        $codearr4 = array();

        //获取所有订单状态为3的订单信息(待评价)       
        foreach($res as $k=>$v){        //遍历
            
            //查询所有订单号相同的订单详情
            $resinfo4 = ordersinfo::where('o_code',$v->o_code)->get();
            foreach($resinfo4 as $k4=>$v4){          //遍历
                if($v4->ostate==3){         //判断是否ostate是否为0，为0才放入数组
                    $codearr4[$v->o_code] = $resinfo4;        //放入数组中，key是订单号，value是订单详情
                }
            }
        }
        
        //将查询信息传到页面中
        return view('homes.user.order',compact('codearr','codearr1','codearr2','codearr3','codearr4','to','to1','to2','to3','to4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //获取订单号
        $code = $request->only('code');

        //改变订单状态为5
        $res = orders::where('o_code',$code)->update(['ostate'=>5]);
        $ress = ordersinfo::where('o_code',$code)->update(['ostate'=>5]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取订单号
        $code = $request->only('code');

        //获取传过来的密码
        $pass = $request->only('pass');

        //获取用户id
        $uid = session('userid');
        
        //获取支付密码
        $res = pay::where('uid',$uid)->first();

        //验证密码
        $hash = Hash::check($pass['pass'], $res['password']);

        if($hash){
            echo 1;
            //改变订单状态为3
            $re = orders::where('o_code',$code)->update(['ostate'=>3]);
            $ress = ordersinfo::where('o_code',$code)->update(['ostate'=>3]);
        }else{
            echo 0;
        }

        //return $code;
        
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
    public function destroy($id)            //删除订单方法
    {      
        DB::beginTransaction();         //开启事务

        //在orders表中删除订单
        $regres = DB::delete("delete from orders where o_code=".$id);
        
        //在ordersinfo表中删除订单
        $regress = DB::delete("delete from ordersinfo where o_code=".$id);

        //判断是否都删除成功
        if($regres && $regress){
            DB::commit();           //成功执行
            return redirect('home/user/userorder');
        } else { 
            DB::rollback();         //失败回滚
            return back();
        }
    }
}
