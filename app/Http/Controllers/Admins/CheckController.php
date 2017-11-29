<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\check;
use DB;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = DB::table('userinfo')->
            where('truename','like','%'.$request->input('search').'%')->
            orderBy('id','asc')->
            paginate($request->input('num',10));

        $req = DB::table('userinfo')->where('apply','1')->get();

        $uinfo = DB::table('userinfo')->simplePaginate(10);


        return view('admins.check.index',compact('res','req','uinfo','request'));
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

        $res = ['apply'=>'3'];

        $data = DB::table('userinfo')->where('id',$id)->update($res);  

        if($res){
            return redirect('/admin/cfail')->with('通过申请');
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
        $res = ['apply'=>'2'];

        $data = DB::table('userinfo')->where('id',$id)->update($res);  

        if($res){
            return redirect('/admin/csucc')->with('通过申请');
        } else {
            return back();
        }
    }
}
