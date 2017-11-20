<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\model\test;

class GoodslistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          // return view('homes.seller.goodslist');

          // $res = DB::table('test');
        $re=test::all();

          // dd($res);
      
            
        return view('homes.seller.goodslist',['ress'=>$re]);


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

        //修改
        $fres=test::find($id);

        // dd($fres);
        return view('homes.seller.goodslistedit',['mo'=>$fres]);
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

        // dd($id);
        // dd($request);

        $update=$request->except('_token','_method');
         // $res = $request->except('_token','_method');
        // dd($update);

        $upres=test::where('id',$id)->update($update);

        if($upres){

            return redirect('/home/seller/goodslist')->with('修改成功');
        } else {

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
        $res=test::where('id',$id)->first();

        // dd($res);

        if($res){
            $info=test::where('id',$id)->delete();
            if($info){
                return redirect('/home/seller/goodslist');
            }else{
                return back();
            }
        }

    }
}
