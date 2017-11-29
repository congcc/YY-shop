<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\shop;
use App\Http\model\ordersinfo;


class OrderbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //查询当前登录用户id
        $id=session('userid');
         // dd($id);
        //通过id判断除商户id
        $usr=shop::where('uid',$id)->get();
        // dd($sid);
        $sid=$usr['0']->id;

        // dd($sid);
        $res=orders::where('sid',$sid )->get();

        // dd($res);
        $ree=array();

        foreach($res as $k => $v){

            $resinfo=ordersinfo::where('o_code',$v->o_code)->get();

                foreach($resinfo as $k1 => $v1){

                    if($v1->ostate==6){
                    $ree[$v->o_code]=$resinfo;
                }
            }
    }


    return view('homes.seller.orderback',["resinfo"=>$resinfo,"ree"=>$ree]); 
        
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
