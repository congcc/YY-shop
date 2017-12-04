<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;

class UserbillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //获取登录用户id
        $id = session('userid');
        
        //查询orders表里uid为$id的信息
        $arr=array();
        for ($i=1; $i <=4 ; $i++) { 
           $info=orders::where(['uid'=>$id,'ostate'=>$i])->get(); 
           if($info){
             array_push($arr,$info);
           }
          
        }

        

        //获取他的所有订单号
        // dd($arr);
        //定义一个空数组
        $array=array();
        foreach ($arr as $k => $v) {

            foreach ($v as $k1 => $v1) {
                //获取订单号
                $code=$v1->o_code;
                //获取订单详情表中order关联的订单单号
                $result = ordersinfo::where('o_code',$code)->get();

                $array[$code] =  $result; 
            }
            
        }
        // dd($array);
        return view('homes.user.bill',compact('arr','array'));
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
