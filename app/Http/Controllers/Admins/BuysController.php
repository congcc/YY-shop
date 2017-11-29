<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\user;
use App\Http\model\userinfo;
use DB;



class BuysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $res = user::all();
        $res = DB::table('user')->
            where('username','like','%'.$request->input('search').'%')->
            orderBy('id','asc')->
            paginate($request->input('num',10));
        $req = DB::table('user')->where('status', '1')->get();
        $users = DB::table('user')->simplePaginate(10);


        return view('admins.buys.index',compact('res','req','request','users'));
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
        $res = DB::table('user')->where('id',$id)->first();
        $result = userinfo::find($id);
         return view('admins.buys.show',compact('res','result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $res = DB::table('user')->where('id',$id)->first();

        return view('admins.buys.edit',['res'=>$res]);
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
        // echo 1;
        $res = $request->except('_token','_method');

        $data = DB::table('user')->where('id',$id)->update($res);

        if($data){

            return redirect('/admin/buys')->with('msg','修改成功');
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
        $res = DB::table('user')->where('id', $id)->delete();
        
        if($res){
            return redirect('/admin/buys')->with('meg','删除成功');
        } else {
            return back();
        }
    }
}
