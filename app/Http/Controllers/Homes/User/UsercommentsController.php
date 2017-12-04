<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\review;
use App\Http\model\ordersinfo;
use App\Http\model\orders;

class Usercommentscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $uid=session('userid');

        //获取用户的状态
        $sto = review::where('uid',$uid)->first();
        $sta = $sto['status'];
        // dd($sta);
        if($sta == 1){
            echo "<script>alert('您已经被禁言');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
            
        }else{
            if($request->hasFile('picture')){

            //修改名字
            $name = rand(1111,9999).time();

            //获取后缀
            $suffix = $request->file('picture')->getClientOriginalExtension();
            // dd($request->picture);
            //移动图片
            
            $request->file('picture')->move('./Upload',$name.'.'.$suffix);


                                             }

            $res = $request->except('_token','picture');

            $res['picture'] = './Upload/'.$name.'.'.$suffix;

            
            $res = review::insert($res);
            //判断是否上传成功
            if(!$res){
               echo "<script>alert('评价失败');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
              
            } else {
                // echo "<script>alert('评价成功');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
                
                $update = ['ostate'=>'4'];
                $upres=ordersinfo::where('gid',$request->gid)->update($update);
                
                //-------下面来改变订单的状态--------//
                //获取订单oid
                $oid=$request->oid;
                //获取订单号
                $o_code=orders::where('id',$oid)->first();
                //获取详情里面的订单号为这个的所有商品
                $goods=ordersinfo::where('o_code',$o_code->o_code)->get();
                //定义一个数组获取里面的所有商品的状态
                // dd($goods);
                foreach ($goods as $key => $value) {
                    // $ll=$value->ostate;
                    // array_push($oo,$ll);
                    if($value->ostate=='3'){
                       
                    }else{
                         $rr = ['ostate'=>'4'];
                        $upres=orders::where('id',$request->oid)->update($rr);
                    }
                }
                

                echo "<script>alert('评价成功');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";

            }
        }

        
       

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
