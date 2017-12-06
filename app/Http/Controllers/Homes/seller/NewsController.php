<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $uid=(session('userid'));

        //获取我的所有订单
        $res=orders::where(['ostate'=>1,'uid'=>$uid])->get();
        // dd($res);
        //获取所有订单号
        $arr=array();
        foreach ($res as $key => $value) {
           $kk=$value->o_code;
           if($kk){
            array_push($arr,$kk);
           }

        }

        
        
        foreach ($arr as $key => $value) {
            //查询订单号的所有信息
            // $ll = orders::where('o_code',$value)->get();

            //根据传过来的订单号查询该订单信息
            $gg = orders::where('o_code',$value)->first();

            //获取用户电话
            $phone = $gg->oruser->phone;

            //获取用户昵称
            $nickname = $gg->oruserinfo->nickname;

            //获取该订单的收货地址
            $addres = $gg->ordersinfo->oraddress->address;

            //将其从json字符串转换为数组
            $maddress = json_decode($addres,true);

        }

        // dd($maddress);
        //跳转到订单详情页面
        return view('homes.seller.news',compact('phone','nickname','maddress','gg'));

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
         $pp['o_code'] = $id;
         $pp['mstate'] = 0;
         $rt=material::insert($pp);

        $orders['ostate']=2;
        $ost=orders::where('o_code',$id)->update($orders);
        // dd($ost);
        
        $fost=ordersinfo::where('o_code',$id)->update($orders);
        // dd($fost);

        if($rt && $ost && $fost){

            echo "<script>alert('发货成功');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
        } else {

            return redirect()->back();
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
