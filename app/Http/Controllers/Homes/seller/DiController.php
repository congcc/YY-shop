<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\shop;
use App\Http\model\orders;




class DiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(session('userid'));
        //session 取id
        $uid=(session('userid'));

        //从shop表中查询uid  和user表中id相同的 用户所有信息(shop uid->user id 为关联字段)
        $shop=shop::where('uid',$uid)->first();

        //dd($shop);

        return view('homes.seller.di',["shop"=>$shop]);

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
        // $uid=$shop[]
        
        // $di=shop::where('id',$uid)->find();
        //dd($id);
        $di=shop::where('id',$id)->first();
        
            // dd($di);
        return view('homes.seller.diedit',["di"=>$di]);
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


        $input=$request->except('_token','_method');
        // dd($input);
        // var_dump($input);die;

        $res=shop::where('id',$id)->update($input);
        // dd($res);
        if($res){

            return redirect('/home/seller/di');

        }else{

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
    }
}
