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
    public function index($gid,$sid,$toprice,$num,$label,$gprices)
    {   
        //获取用户id
        $uid = session('userid');

        //获取商品id
        $gid = $gid;

        //获取总价格
        $toprice = $toprice;

        //获取商家id
        $sid = $sid;

        //获取商品数量
        $num = $num;
        
        //获取标签
        $label = $label;

        //获取选择的单价
        $gprices = $gprices;

        //订单生成时间
        $ord_time = time();

        //生成订单号
        $o_code = $uid.rand(100000,999999);

        //获取该用户的所有地址信息
        $addr = address::where('uid',$uid)->get();

        //获取商品的详细信息
        $resgoods = goods::where('id',$gid)->get();

        //进入页面
        return view('homes/user/ordersub',compact('o_code','addr','resgoods','label','toprice','num','gprices','gid','sid'));

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //获取传功来的数据
        $res = $request->except('_token');
        $label = $res['label'];             //规格
        $addrs = $res['addrs'];             //地址下标
        $omessage = $res['mes'];            //留言
        $goods_num = $res['goods_num'];     //数量
        $gid = $res['gid'];                 //商品id
        $total_price = $res['total_price'];         //总价
        $uid = session('userid');           //用户id
        $addres = address::where('uid',$uid)->get();           //用户的所有地址
        $o_addr = $addres[$addrs]->id;          //所选地址id
        $sid = $res['sid'];                 //商户id
        $ord_time = time();                    //订单生成时间

        //生成订单号
        $o_code = $uid.rand(10000,99999); 
        DB::beginTransaction();         //开启事务

        //在orders表中添加订单
        $regres = orders::insert(['uid'=>$uid,'sid'=>$sid,'o_code'=>$o_code,'total_price'=>$total_price,'ostate'=>0]);
        
        //在ordersinfo表中添加订单
        $regress = ordersinfo::insert(['sid'=>$sid,'gid'=>$gid,'goods_num'=>$goods_num,'omessage'=>$omessage,'ostate'=>0,'o_extend'=>0,'o_code'=>$o_code,'o_addr'=>$o_addr,'ord_time'=>$ord_time,'label'=>$label]);

        //判断是否都添加成功
        if($regres && $regress){
            DB::commit();           //成功执行
            echo $o_code;
            //进入页面
            //return view('homes/user/ordersub',compact('res'));
            
        } else { 
            DB::rollback();         //失败回滚
            echo 0;
            //return back();
        }

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
