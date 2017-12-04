<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\user;
use App\Http\model\userinfo;
use Hash;

class LoginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    
        $req = $request->except('_token');
        $i = $req['i'];//定义登录失败次数
        
        //查询该用户信息
        $res = user::where('phone',$req['uname'])->first();
        if(!$res){ return 404;die; }
        


        //查询该用户状态
        if($res['status']=='1'){
            //查询密码
            $hash = Hash::check($req['password'], $res['password']);
            
            //密码正常
            if ($hash) {
               $result = session(['userid'=>$res['id'],'utype'=>$res['utype']]);
               return 1; 
            //密码错误
            }else{
                $i++;
                    //登录次数过多封禁用户  2状态是封禁24小时
                    if ($i>103) { 
                        $stats = user::where('phone',$req['uname'])->update(['status'=>2]);
                        return 2;
                        }
                return $i;
            }
        }else if($res['status']==0){
            return 3; //0状态必须由管理员解封
        }else if($res['status']==2){
            return 2; //2状态是封禁24小时
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
