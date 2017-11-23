<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\user;
use App\Http\model\userinfo;
use Hash;
use DB;

class RegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('homes.register');      //加载用户注册页面
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
    public function store(Request $request)                 //用户注册
    {
        //
        //获取表单传过来数据信息 
        $req = $request->only(['phone', 'password']);

        //对密码进行哈希加密
        $req['password'] = Hash::make($request->input('password'));

        //将手机号放入数组中(用户名用手机号)
        $req['username'] = $request->input('phone');

        //定义一个数组用来存放加入userinfo表中的数据
        $reqs = array();
        $reqs['createtime_user'] = time();          //注册时间

        DB::beginTransaction();         //开启事务

        //将数据添加到user表中
        $regres = DB::insert("insert into user(username,password,phone) values ('".$req['username']."','".$req['password']."','".$req['phone']."')");
        
        //将数据添加到userinfo表中
        $regress = DB::insert("insert into userinfo(createtime_user) values ('".$reqs['createtime_user']."')");
        
        //获取刚才插入的数据
        $getid = user::where('phone',$request->input('phone'))->get();

        //获取刚刚插入的id
        $id = $getid[0]->id;

        //判断是否都添加成功
        if($regres && $regress){
            DB::commit();           //成功执行
            session(['userid'=>$id]);
            return redirect('home/index');      //返回商城主页
        } else { 
            DB::rollback();         //失败回滚
            return back();
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
