<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\model\test;
use App\Http\model\cate_name;
use App\Http\model\cateone;
use App\Http\model\catetwo;
use App\Http\model\shop;
use zgldh\QiniuStorage\QiniuStorage;


class GoodsupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = session('userid');
        $shop = shop::where('uid',$uid)->first();

        //店铺所属分类
        $c_one = cateone::where('id',$shop['stype'])->first();
        //店铺二级分类
        $c_two = cateone::where('pid',$shop['stype'])->get();
        // dd($c_two[0]['id']);
        //店铺三级分类
        $c_three = catetwo::where('pid',$c_two['0']->id)->get();
        // for ($i=0; $i < $c_two->count() ; $i++) { 
        //     $c_three = catetwo::where('pid',)->get();
        //     dd($c_three);
        // }
        
        
        return view('homes.seller.goodsup',compact('c_one','c_two','c_three'));
       
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
        
        //获取传送过来的数据
        $res = $request->except('_token');
        
        //定义一个用来存储商品规格的数组
        $cates = array();
        
        //添加第一个规格数组
        $cates[0] = $res['arr3'];       
        
        //添加第二个规格数组
        $cates[1] = $res['arr4'];       
        
        //将数组转为json字符串
        $catesjson = json_encode($cates);

        //定义一个用来存储对应规格的商品价格的数组
        $prices = array_combine($res['arr1'], $res['arr2']);

        //将数组转为json字符串
        $pricesjson = json_encode($prices);

        $sid = 1;
        $clid = 100000;
        $gname = '康师傅泡面新美味豚骨方便面整箱批发面条速食海鲜酸辣日式15包';
        $gimg = '/uploads/goodspic/g1.jpg';
        $gprice = 10;
        $gstate = 2;
        $gstatus = 1;

        $bool = goods::insert(['sid'=>$sid,'clid'=>$clid,'gname'=>$gname,'gimg'=>$gimg,'gprice'=>$gprice,'gstate'=>$gstate,'gstatus'=>$gstatus,'label'=>$catesjson,'gprices'=>$pricesjson]);

        //判断是否添加成功
        if($bool){
            echo 1;
        }else{
            echo 0;
        }



        // //
        // // var_dump($request->name);die;
        // $res=$request->except('_token') ;  
        // // dd($res);

        // $data = test::insert($res);
        // // dd($data);


        // if($data){

        //     return redirect('/home/seller/goodsup')->with('添加成功');
        // } else {

        //     return back()->withInput();
        // }


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



    public function select(Request $request)
    {
        
        $res = catetwo::where('pid',$request->only('twoid'))->get();
       return $res;
    }

     public function upload(Request $request)
    {   

        // $file = $request->file('pic');

        // // 验证
        // // 获取文件路径
        // $transverse_pic = $file->getRealPath();
        
        // // 获取后缀名
        // $postfix = $file->getClientOriginalExtension();
        // $fileName = md5(time().rand(0,10000)).'.'.$postfix;
        
        // $disk = QiniuStorage::disk('qiniu');        //初始化七牛

        // // $disk = Storage::disk('qiniu');
        // $disk->put('img/'.$fileName, $transverse_pic);
        // //dd($file);
        // return $fileName;       


            $file = $request->file('file');        //接收文件信息(qiniu是input的name值)
            $disk = QiniuStorage::disk('qiniu');        //初始化七牛
            $name = rand(1111,9999).time();         // 随机文件名
            $suffix = $file->getClientOriginalExtension();      //获取文件后缀名
            $filename = $name.$suffix;          //拼接一个新的文件名
            $bool = $disk->put('img/image_'.$filename,file_get_contents($file->getRealPath()));         //上传

            if($bool){
                return $filename;
            }
        
    }
}
