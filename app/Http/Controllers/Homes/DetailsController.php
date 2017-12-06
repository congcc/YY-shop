<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\goods;
use App\Http\model\review;
use App\Http\model\user;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $gid = 129;

        //获取商户id
        $si = goods::where('id',$gid)->first();
        $sid = $si['sid'];
        
        //获取当前商品信息
        $res = goods::where('id',129)->get();


        //商品小图
        $gdpics = $res[0]->gdpic;

        //转为数组
        $gdpic = explode(',', $gdpics);

        //获取当前商品评论
        $re = review::where('gid',129)->get();
        
         $userid = 0;

         if(session('userid')){
            $user = user::where('id',session('userid'))->first();
            $userid = 1;
         }
        
        //显示页面
        return view('homes.shop.details',compact('res','gdpic','re','gid','sid','user','userid'));
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
    public function show(Request $request)
    {
        //获取传过来的inds
        $inds = $request->input('inds');

        //查询该商品的信息
        $res = goods::where('id',129)->get();

        //获取对应价格
        $gprices = number_format(json_decode($res[0]->gprices,true)[$inds],2);
        
        //输出返回
        echo $gprices;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($gid)
    {
        //获取商户id
        $si = goods::where('id',$gid)->first();
        $sid = $si['sid'];
        
        //获取当前商品信息
        $res = goods::where('id',$gid)->get();


        //商品小图
        $gdpics = $res[0]->gdpic;

        //转为数组
        $gdpic = explode(',', $gdpics);

        //获取当前商品评论
        $re = review::where('gid',$gid)->paginate(2);
        
         $userid = 0;

         if(session('userid')){
            $user = user::where('id',session('userid'))->first();
            $userid = 1;
         }
       
        //显示页面
        return view('homes.shop.details',compact('res','gdpic','re','gid','sid','user','userid'));
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
