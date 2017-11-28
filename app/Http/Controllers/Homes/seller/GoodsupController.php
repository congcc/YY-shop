<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\model\test;
use App\Http\model\cate_name;
use App\Http\model\goods;

class GoodsupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          return view('homes.seller.goodsup');
       
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
