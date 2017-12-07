<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;
use App\Http\model\user;
use App\Http\model\shop;
use App\Http\model\goods;
use DB;


class DingoodsController extends Controller
{
    /**
     * Display a listing<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;
use App\Http\model\user;
use App\Http\model\shop;
use App\Http\model\goods;
use DB;


class DingoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //2 待收货的订单
        $res = orders::where('o_code','like','%'.$request->input('search').'%')
        ->orderBy('ostate','asc')
        ->paginate(5);

        $req = orders::where('ostate', '2')->get();

        return view('admins.orders.goods.index',compact('res','req','request'));
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
        $orde = orders::where('id',$id)->first();
        $ordes = ordersinfo::where('o_code',$orde->o_code)->first();
        $user = user::where('id',$orde->uid)->first();
        $shop = shop::where('id',$orde->sid)->first();
        $good = goods::where('sid',$orde->sid)->first();
        
        return view('admins.orders.goods.show',compact('orde','ordes','user','shop','good'));
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
of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //2 待收货的订单
        $res = orders::where('o_code','like','%'.$request->input('search').'%')
        ->orderBy('ostate','asc')
        ->paginate(5);

        $req = orders::where('ostate', '2')->get();

        return view('admins.orders.goods.index',compact('res','req','request'));
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
        $orde = orders::where('id',$id)->first();
        $ordes = ordersinfo::where('o_code',$orde->o_code)->first();
        $user = user::where('id',$orde->uid)->first();
        $shop = shop::where('id',$orde->sid)->first();
        $good = goods::where('sid',$orde->sid)->first();
        
        return view('admins.orders.goods.show',compact('orde','ordes','user','shop','good'));
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
