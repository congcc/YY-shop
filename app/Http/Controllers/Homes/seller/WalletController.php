<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;
use App\Http\model\shop;



class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //session中获取user表中 userid
       $id=(session('userid'));

       //获取shop表中uid=$id  获取登录用户的店铺的所有订单
       $user=shop::where('uid',$id)->first();

       //获取店铺id
       $sid=$user['id'];
       // dd($su);

       // dd($user);
         //获取店家所有订单
        $res=orders::where('sid',$sid)->get();

        
        //定义空数组
        $m=array();
        foreach ($res as $key => $value) {
            //获取订单号
            $code= $value['o_code'];

            //获取订单详情表中order关联的订单单号
            $result = ordersinfo::where('o_code',$code)->get();
            //
            $m[$code] =  $result;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        }
// 
        // dd($result);
        // dd($m);
         // dd($res);
        
        
        // dd($o_code);

        // 获取订单号
        return view('homes.seller.wallet',["user"=>$user,"res"=>$res,"result"=>$result,"m"=>$m]);
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
