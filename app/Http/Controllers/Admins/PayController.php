<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\pay;
use App\Http\model\user;
use App\Http\model\goods;
use App\Http\model\userinfo;
use App\Http\model\orders;
use App\Http\model\shop;
use DB;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $o = orders::all();

        $uid = [];
        $sid = [];
        $o_c = [];
        foreach ($o as $key => $value) {
            $ud = $value->uid;
            $sd = $value->sid;
            $od = $value->o_code;
            array_push($uid,$ud);
            array_push($sid,$sd);
            array_push($o_c,$od);
        }
        $u=array();
        foreach ($uid as $key => $value) {
            $user = user::where('id',$value)->first();
            array_push($u,$user);
            
        }
        //用户信息
        // $mm=array_unique($u);


        $s=array();
        foreach ($sid as $key => $value) {
            $sid = goods::where('id',$value)->first();
            array_push($s,$sid);
            
        }
        //商品详细信息
        $ss=array_unique($s);
        

        $sh=array();
        foreach ($uid as $key => $value) {
            $shop = shop::where('uid',$value)->first();
            array_push($sh,$shop);
            
        }
        $hh=array_unique($sh);
        // dd($hh);

        // dd($o);
        // dd($u);
        // $name = [];
        // foreach ($u as $k => $v) {
        //     $username = $v->username;
        //     array_push($name,$username);
        // }

        // dd($name);
        // dd($ss);
        // dd($hh);

        


        return view('admins.pay.index',compact('o','u','ss','hh'));
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
