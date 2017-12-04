<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\model\goods;
use App\Http\model\shop;
use App\Http\model\gdetails;

class GoodslistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid=session('userid');

        //获取sid
        $res=shop::where('uid',$uid)->get();
        $sid=$res['0']->id;

        //获取goods表里的商品
        $goods=goods::where('sid',$sid)->paginate(8);

        //获取gprices里
        $prices=array();
        foreach ($goods as $key => $value) {
            if($value->gprices){
                $mm=json_decode($value->gprices,true);
                array_push($prices,$mm);
            }
            
        }

        //定义一个数组来接收$goods里gid=$goods里的id的东西
        $arr=array();
        foreach ($goods as $key => $value) {

           $gd=gdetails::where('gid',$value->id)->first();
           
            if($gd){
                array_push($arr, $gd);
            }
        }

        // $res = gdetails::join('goods','goodstype.id','=','goods.fid')->where('goodstype.bid','=',"$a")->where("status",'=','1')->where('goods.bid','=',"$a")->paginate(4);

        return view('homes/seller/goodslist',compact('goods','arr','prices'));


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
        $update = ['gstatus'=>'0'];
        $upres=goods::where('id',$id)->update($update);

        if($upres){

            return redirect('/home/seller/goodslist')->with('修改成功');
        } else {

            return back();
        }
        //修改
        // $fres=test::find($id);

        // dd($fres);
        // return view('homes.seller.goodslistedit',['mo'=>$fres]);
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

        // dd($id);
        // dd($request);

        // $update=$request->except('_token','_method');
         // $res = $request->except('_token','_method');
        // dd($update);
        $update = ['gstatus'=>'1'];
        $upres=goods::where('id',$id)->update($update);

        if($upres){

            return redirect('/home/seller/goodslist')->with('修改成功');
        } else {

            return back();
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
        $res=goods::where('id',$id)->first();

        // dd($res);

        if($res){
            $info=goods::where('id',$id)->delete();
            if($info){
                return redirect('/home/seller/goodslist');
            }else{
                return back();
            }
        }

    }
}
