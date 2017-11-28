<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\shopcar;
use App\Http\Model\goods;

class CarController extends Controller
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
    public function addcar(Request $request)
    {
        
        $req = $request->only('gid','label'); //取出数据
        $res = shopcar::where('gid',$req['gid'])->first();
        $result = $res->Where('label', $req['label'])->first(); //查询是否重复添加购物车的数据
        //定义修改时间
        $time = time();
        
        //有重复数据添加数量
        if($result){
            $gum = $result['gum'] + 1;
            
             $sta = shopcar::where('id',$result['id'])->update(['gum'=>$gum,'time'=>time()]);
            if ($sta) {
                echo 1;
            }
        }else if(!$res || !$result){
            //无重复,添加数据
            $uid = session('userid');
            $uid = 6;
            $sid = 1;

            $sta = shopcar::insert(['uid'=>$uid,'gid' => $req['gid'],'sid'=>$sid,'label'=>$req['label'],'time'=>time()]);
            
             if ($sta) {
                echo 2;
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ajax  计算购物车单品单价
        
         $req =  $request->only('gum','id');
        //修改时间(他和另外一个移除数组重复冲突)
        
        $time = time();

        //修改数量
         $res = shopcar::where('id',$req['id'])->update(['gum'=>$req['gum'],'time'=>$time]);
        //获取本id信息
         $total = shopcar::where('id',$req['id'])->first();
         $tot = goods::where('id',$total['gid'])->first();
         
         $tota = $tot['gprice'] * $req['gum'];

         if($res){
            echo $tota;
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
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //删除购物车
        $req = $request->only('id');
        // $res = shopcar::delete($req);
        $res = shopcar::where('id',$req)->delete();
        if($res){
            echo 1;
        }
    }
}
