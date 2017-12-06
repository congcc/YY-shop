<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\address;
use DB;

class AddrController extends Controller
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
        
        
        // 从文件中读取数据到PHP变量
        $json_string = file_get_contents('./homes/script/list.json');
         
        // 把JSON字符串转成PHP数组
        $data = json_decode($json_string, true);
         
        // 显示出来看看
        // dd($data);    
        //将省市县,地址 找出来,并拼接成一个数组
        $sheng = $data[$req['sheng']];  
        if ($req['shi']) {
            $shi = $data[$req['shi']];
        }
        $xian = $data[$req['xian']];
        $xiangxi = $req['addr'];

        $addr = array();
        array_push($addr,$sheng);  
        
        array_push($addr,$xian);
        array_push($addr,$xiangxi);

        if ($req['shi']) {
            array_push($addr,$shi);
        }else{
            array_push($addr,'');
        }
        
        // //转成json字符串
        $str = json_encode($addr);
        
        //判断此人是否拥有地址
        $site = address::where('uid',$req['uid'])->first();

        if($site){
            //拼接插入信息的数组
             $address = array('uid'=>$req['uid'],'name'=>$req['name'],'phone'=>$req['ph'],'address'=>$str);
            //添加
            $res = address::insert($address);

            if($res){
                return 1;
            }
        }else{
            //如果地址给一条默认地址
            //拼接插入信息的数组
             $address = array('uid'=>$req['uid'],'name'=>$req['name'],'phone'=>$req['ph'],'address'=>$str,'defadd'=>1);
            //添加
            $res = address::insert($address);

            if($res){
                return 1;
            }
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
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uid = session('userid'); 
        
         DB::beginTransaction();         //开启事务

        //将将默认值设为1的变成非默认   把设定的新地址默认值设为1  
         $result = address::where(['uid'=>$uid,'defadd'=>1])->update(['defadd'=>0]);
         $res = address::where('id',$id)->update(['defadd'=>1]);
  
        // 判断是否都添加成功
        if($res && $result){
            DB::commit();           //成功执行
            return redirect('home/user/useraddr');      //返回
        } else { 
            DB::rollback();         //失败回滚
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
    public function update(Request $request)
    {
        $req = $request->except('_token');
        

        // 从文件中读取数据到PHP变量
        $json_string = file_get_contents('./homes/script/list.json');
         
        // 把JSON字符串转成PHP数组
        $data = json_decode($json_string, true);
         
        // 显示出来看看
        // dd($data);
        //将省市县,地址 找出来,并拼接成一个数组
        $sheng = $data[$req['sheng']];  
        if ($req['shi']) {
            $shi = $data[$req['shi']];
        }
        $xian = $data[$req['xian']];
        $xiangxi = $req['addr'];

        $addr = array();
        array_push($addr,$sheng);  
        
        array_push($addr,$xian);
        array_push($addr,$xiangxi);

        if ($req['shi']) {
            array_push($addr,$shi);
        }else{
            array_push($addr,'');
        }
        // return $addr;
        //转成json字符串
        $str = json_encode($addr);
        
        //拼接插入信息的数组
         $address = array('uid'=>$req['uid'],'name'=>$req['name'],'phone'=>$req['ph'],'address'=>$str);
        //添加
        $res = address::where('id',$req['id'])->update($address);

        if($res){
            return 1;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->only('id');

        $res = address::where('id',$id)->delete();
        if($res){
            echo 1 ;
        }
    }
}
