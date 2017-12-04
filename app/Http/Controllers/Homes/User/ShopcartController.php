<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\shopcar;
use App\Http\Model\shop;
use App\Http\Model\goods;
use App\Http\Model\goodscate;

class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $uid = session('userid');

        $req = shopcar::where('uid',$uid)->first();
        
        $array = array(); 
        $res = 0;
        
        if($req){
            $result = shopcar::where('uid',$uid)->orderBy('time', 'desc')->get();
            $count = shopcar::where('uid',$uid)->count();
            for ($i=0; $i < $count; $i++) {
                //查询sid的并且uid=本人id的数据
                $res = shopcar::where('sid',$result[$i]->sid)->Where('uid',$uid)->get();
                // $res = shopcar::where(function($query) {
                //                 $query->where('uid', '=', $uid)
                //                       ->where('sid', '=', $result[$i]->sid);
                //             })->get();
                $array[$i] = $res;
            }
            //移除数组中重复的值
            $array = array_unique($array);
            
        }
        
        return view('homes.user.shopcart',compact('array','res'));

        // return view('homes.user.shopcart1');
        

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
