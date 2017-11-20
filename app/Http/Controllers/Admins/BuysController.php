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
        $res = user::all();

        return view('admins.buys.index',['res'=>$res]);
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

        // $res = DB::table('user')->where('id',$id)->first();
         // $res = DB::table('userinfo')->where('id',$id)->first();

        // var_dump($res);
        // $res = user::where('id',1)
        //             ->join('cinema','cinema.id','=','money.mid')
        //             ->select('cinema.cinema','cinema.legal','cinema.phone','money.money')
        //             ->get();
        $res = user::where('id',1)
                    ->join('userinfo','userinfo.id','=','user.id')
                    ->select('userinfo,userinfo','userinfo.birth','userinfo.nickname','userinfo.truename','userinfo.sex','userinfo.idcard','userinfo.area','userinfo.createtime_user','userinfo.last_user','userinfo.apply','userinfo.wallet','userinfo.email','user.user')
                    ->get();


        var_dump($res);
                                                                                                                       
         return view('admins.buys.show',['res'=>$res]);
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
