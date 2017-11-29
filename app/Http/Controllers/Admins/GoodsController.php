<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\goods;
use DB;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = DB::table('goods')->where('gstate','2')->get();

        $good = DB::table('goods')->simplePaginate(10);


        return view('admins.goods.index',compact('res','good','request'));
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
        $res = DB::table('goods')->where('id',$id)->first();

        $shop = DB::table('shop')->where('id',$res->sid)->first();

        $gc = DB::table('goodscate')->where('pid',$res->clid)->first();

         return view('admins.goods.show',compact('res','shop','gc'));

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
         $res = ['gstate'=>'0'];

        $data = DB::table('goods')->where('id',$id)->update($res);  

        if($res){
            return redirect('/admin/goods')->with('未通过申请');
        } else {
            return back();
        }
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


        $res = ['gstate'=>'1'];

        $data = DB::table('goods')->where('id',$id)->update($res);  

        if($res){
            return redirect('/admin/goods')->with('通过申请');
        } else {
            return back();
        }
    }
}
