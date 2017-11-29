<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;

use DB;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //1 代发货的订单
        $res = DB::table('orders')->where('ostate', '1')->get();
        $ord = DB::table('orders')->simplePaginate(10);

        return view('admins.orders.shipping.index',['res'=>$res,'ord'=>$ord]);

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
         $orde = DB::table('orders')->where('id',$id)->first();
        $ordes = DB::table('ordersinfo')->where('o_code',$orde->o_code)->first();
        $user = DB::table('user')->where('id',$orde->uid)->first();
        $shop = DB::table('shop')->where('id',$orde->sid)->first();
        $good = DB::table('goods')->where('sid',$orde->sid)->first();
        var_dump($orde);
        var_dump($ordes);
        var_dump($user);
        var_dump($shop);
        var_dump($good);
        return view('admins.orders.shipping.show',compact('orde','ordes','user','shop','good'));
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
