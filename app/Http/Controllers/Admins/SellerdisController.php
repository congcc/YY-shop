<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\shop;
use DB;


class SellerdisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = shop::all();
        $req = DB::table('shop')->where('sauth', '0')->get();
        $shops = DB::table('shop')->simplePaginate(10);

        
        return view('admins.seller.dis',compact('res','req','shops'));
/*        var_dump($request);die();
        $res = DB::table('shop')->
            where('sname','like','%'.$request->input('search').'%')->
            orderBy('id','asc')->
            paginate($request->input('num',10));
        return view('admins/seller/dis',['res'=>$res,'request'=$request]);*/
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

        $res = ['sauth'=>'0'];

        $data = DB::table('shop')->where('id',$id)->update($res);  

        if($res){
            return redirect('/admin/sellerdis')->with('卖家禁用');
        } else {
            return back();
        }
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
        var_dump($id);

        $res = ['sauth'=>'1'];

        $data = DB::table('shop')->where('id',$id)->update($res);  

        if($res){
            return redirect('/admin/seller')->with('卖家开启');
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
    }
}
