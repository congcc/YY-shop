<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\ordersinfo;
use App\Http\model\orders;
use App\Http\model\goods;
use App\Http\model\review;


class UserreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取用户的id
        $id = session('userid');
        // dd($id);

        //获取orders表里面本用户的订单号
        $code = orders::where('uid',$id)->get();
        // dd($code);
        //
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
      

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //获取要修改的订单号的商品
        $goods = ordersinfo::where('o_code',$id)->get();
        // dd($goods);

        //获取要修改的订单号的id
        $orders = orders::where('o_code',$id)->first();
        $oid = $orders['id'];
        // dd($oid);

        $uid=session("userid");

        

        //定义一个数组来接收获取good的id
        $arr=array();

        foreach ($goods as $key => $value) {
            $mm = $value->gid;

            if($mm){
                array_push($arr,$mm);
            } 
        }

        // dd($arr);

        // 获取评论内容
        $dd = array();
        foreach ($arr as $key => $value) {
            $cc = ordersinfo::where('gid',$value)->first();
            if($cc){
                array_push($dd,$cc);
            }
        }
// dd($dd);
        return view ('homes.user.ureview',compact('arr','id','uid','oid','dd'));
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
        $oid=$request->oid;
        $uid=$request->uid;
         $id= $id;
         
        return view ('homes.user.comments',compact('id','oid','uid'));
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
