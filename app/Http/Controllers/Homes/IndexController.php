<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\goodscate;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resa = goodscate::where('pid','like','%00000')->get();
        // $array = array();
        // foreach ($resa as $k => $v) {
        //     $ida = substr($v['pid'],0,1);
            
        // }
        // dd('gao');
        $id = '1';
        $id = (Int)$id;
        
         // $res = goodscate::where('pid','like',"{$id}%000")->get();
         // $res = goodscate::where('pid','like',$id.'%')->get();
         $res =  goodscate::where('pid','like',$id.'%000')->get();
         $res1 = goodscate::where('pid',$id.'0000')->get();
         
        return view('homes.index',compact('resa'));
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
