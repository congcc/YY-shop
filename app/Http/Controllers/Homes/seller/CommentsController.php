<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\review;
use App\Http\model\shop;
use App\Http\model\goods;

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
