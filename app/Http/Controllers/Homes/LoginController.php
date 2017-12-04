<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\user;
use App\Http\model\userinfo;
use Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homes.login');
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
        // $req = $request->only('password','phone');
        
        // $res = user::where('id',$req['id'])->first();
        // // //对密码进行哈希加密
        // // $password = Hash::make($req['password']);

        // // //修改密码
        // // $result = user::where('id',$req['id'])->update(['password'=>$password]);
        // // if($result){
        // //     // unset(session('userid'));
        // //     echo 1;
        // // }
        $req = $request->only('password','phone');
        $res = user::where('phone',$req['phone'])->first();
        //对密码进行哈希加密
        $password = Hash::make($req['password']);

        //修改密码
        $result = user::where('phone',$req['phone'])->update(['password'=>$password]);
        if($result){
            // unset(session('userid'));
            echo 1;
        }
         
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
