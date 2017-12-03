<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;
use App\Http\model\address;
use App\Http\model\goods;
use DB;


class OrdersubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($gid,$sid,$toprice,$num)
    {   
        //获取用户id
        $uid = session('userid');

        //获取商品id
        $gid = $gid;
        $gid = 2;       //测试数据

        //获取总价格
        $toprice = $toprice;
        $toprice = 90;      //测试数据

        //获取商家id
        $sid = $sid;
        $sid = 1;           //测试数据

        //获取商品数量
        $num = $num;
        $num = 3;           //测试数据

        //订单生成时间
        $ord_time = time();

        //生成订单号
        $o_code = $uid.rand(100000,999999);

        //获取该用户的所有地址信息
        $addr = address::where('uid',$uid)->get();

        //获取商品的详细信息
        $resgoods = goods::where('id',$gid)->get();

        //进入页面
        return view('homes/user/ordersub',compact('o_code','addr','resgoods'));

        /*DB::beginTransaction();         //开启事务

        //在orders表中添加订单
        $regres = orders::insert(['uid'=>$uid,'sid'=>$sid,'o_code'=>$o_code,'total_price'=>$toprice,'ostate'=>0]);
        
        //在ordersinfo表中添加订单
        $regress = ordersinfo::insert(['sid'=>$sid,'gid'=>$gid,'goods_num'=>$num,'ostate'=>0,'o_extend'=>0,'o_code'=>$o_code,'ord_time'=>$ord_time]);

        //判断是否都添加成功
        if($regres && $regress){
            DB::commit();           //成功执行
           
            //进入页面
            return view('homes/user/ordersub',compact('res'));
            
        } else { 
            DB::rollback();         //失败回滚
            return back();
        }
*/

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
