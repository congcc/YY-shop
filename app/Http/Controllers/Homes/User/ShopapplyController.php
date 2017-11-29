<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\user;
use App\Http\Model\shop;
use App\Http\Model\userinfo;
use App\Http\model\cateone;
use zgldh\QiniuStorage\QiniuStorage;



class ShopapplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = session('userid');

        
        $res = userinfo::where('id',$uid)->first();
        $shop = shop::where('uid',$uid)->first();
        $c_one = cateone::where('pid','0')->get();

        return view('homes.user.shopapply',compact('res','c_one','shop'));
    }

     public function auth()
    {
        $uid = session('userid');

        $shop = shop::where('uid',$uid)->first();

        return view('homes.user.auth',compact('shop'));
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
        $uid = session('userid');
        //存入数组信息
        $req =  $request->except('_token');
        $req['uid'] = $uid;
        $req['sclass'] = 100;
        $req['swallet'] = 1000;
        $req['sauth'] = 3;

        $res = shop::insert($req);

        if($res){
            $result = user::where('id',$uid)->update(['utype'=>2]);
            if($result){
            echo "<script>alert('您已成功提交了店铺申请,请耐心等待');window.location.href='/home/seller/index'</script>";}
        }else{
            echo "<script>alert('申请失败');window.location.href='/home/seller/index'</script>";
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


     public function upload(Request $request)
    {   

            // $file = $request->file('file_upload'); 
            $file = $request->only('file_upload'); 
            return $file;
            $disk = QiniuStorage::disk('qiniu');      
            $name = rand(1111,9999).time();   
            $suffix = $file->getClientOriginalExtension();      
            $filename = $name.$suffix;          
            $bool = $disk->put('img/image_'.$filename,file_get_contents($file->getRealPath()));         

            if($bool){
                return $filename;
            }
        
    }
}
