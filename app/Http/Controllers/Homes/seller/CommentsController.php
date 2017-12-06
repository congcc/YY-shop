<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\review;
use App\Http\model\shop;
use App\Http\model\goods;
use App\Http\model\comments;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //获取登录商家的id
        $id = session('userid');
        // dd($id);

        //在获取sid
        $shop=shop::where('uid',$id)->get();
        // dd($shop);

        //获取id
        $sid=$shop['0']->id;

        //获取sid为$sid的商品
        $goods=goods::where('sid',$sid)->get();
              // dd($goods)

        //定义一个数组
        $arr=array();
        foreach ($goods as $key => $value) {
            
            $m=review::where('gid',$value['id'])->first();
            if($m){
                array_push($arr, $m);
            }
            

        }

        // var_dump($arr);die;
       
        return view('homes.seller.comments',['goods'=>$goods,'arr'=>$arr]);
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
        $req = $request->except('_token');

        $req = comments::insert($req);

        //判断是否上传成功
            if(!$req){
               echo "<script>alert('回复失败');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
            } else {
                echo "<script>alert('回复成功');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
                
                // echo "<script>alert('回复失败');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";

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
        // dd($id);
        $id = $id;

        return view('/homes/seller/wcomments',compact('id'));
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
        // dd($request->status);
        if($request->status == '1'){
            $mm['status']=0;
            $upres=review::where('oid',$id)->update($mm);
            if(!$upres){
               echo "<script>alert('解封失败');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
               
            } else {
                echo "<script>alert('解封成功');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
                
                // return redirect()->back();

            }
        }else{
            $mm['status']=1;
            $upres=review::where('oid',$id)->update($mm);
            if(!$upres){
               echo "<script>alert('禁言失败');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
               
            } else {
                echo "<script>alert('禁言成功');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
                
                // return redirect()->back();
        }
        
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
