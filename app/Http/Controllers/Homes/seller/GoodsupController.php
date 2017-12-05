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
use App\Http\model\goods;
use App\Http\model\goodstags;
use DB;

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

        $c_one = cateone::where('id',$shop['stype'])->first();
       
        $c_two = cateone::where('pid',$shop['stype'])->get();
        // dd($c_two[0]['id']);
        
        $c_three = catetwo::where('pid',$c_two['0']->id)->get();
       
        
        
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

        //获取传递来的数据
        $res = $request->except('_token');
        
        //定义一个用来存储规格的数组
        $cates = array();
        
        //口味
        $cates[0] = $res['arr3'];  
        
        //包装
        $cates[1] = $res['arr4'];       
        
        //将数组转为json字符串
        $catesjson = json_encode($cates);

        //合并数组，不同规格对应不同价格
        $prices = array_combine($res['arr1'], $res['arr2']);

        //将数组转为json字符串
        $pricesjson = json_encode($prices);

        $uid = session('userid');           
        $si = shop::where('uid',$uid)->first();
        $sid = $si['id'];                   //商家id
        $clid = $res['clid'];               //商品分类
        $gname = $res['gname'];             //商品名称
        $gimg = $res['gimg'];               //商品图片
        $gdpic = $res['gdpic'];             //商品小图
        $gprice = $res['gprice'];           //商品价格
        $gcontent = $res['gdcont'];         //富文本内容
        $knumber = $res['knumber'];         //库存

        //获取商品标签数据
        $tag_a = $res['tagsarr'][0];
        $tag_b = $res['tagsarr'][1];
        $tag_c = $res['tagsarr'][2];
        $tag_d = $res['tagsarr'][3];

        DB::beginTransaction();         //开启事务  

        //添加商品（获取添加id）
        $regres = goods::insertGetId(['sid'=>$sid,'clid'=>$clid,'gname'=>$gname,'gimg'=>$gimg,'gprice'=>$gprice,'label'=>$catesjson,'gprices'=>$pricesjson,'gcontent'=>$gcontent,'gdpic'=>$gdpic,'knumber'=>$knumber]);
        
        //添加商品标签
        $regress = goodstags::insert(['gid'=>$regres,'cateid'=>$clid,'tag_a'=>$tag_a,'tag_b'=>$tag_b,'tag_c'=>$tag_c,'tag_d'=>$tag_d]);

        //判断是否都成功
        if($regres && $regress){
            DB::commit();               //成功执行      
            echo 1;
        } else { 
            DB::rollback();             //失败
            echo 0;
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



    public function select(Request $request)
    {
        
        $res = catetwo::where('pid',$request->only('twoid'))->get();
       return $res;
    }

     public function upload(Request $request)
    {   

            $file = $request->file('file');      
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
