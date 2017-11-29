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

        
        $res = $request->except('_token');
        
        $cates = array();
        
        $cates[0] = $res['arr3'];       
        
        $cates[1] = $res['arr4'];       
        
        $catesjson = json_encode($cates);

        $prices = array_combine($res['arr1'], $res['arr2']);


        $pricesjson = json_encode($prices);

        $sid = session('userid');
        $clid = $res['clid'];
        $gname = $res['gname'];
        $gimg = $res['gimg'];
        $gdpic = $res['gdpic'];
        $gprice = $res['gprice'];
        $gcontent = $res['gdcont'];

        $bool = goods::insert(['sid'=>$sid,'clid'=>$clid,'gname'=>$gname,'gimg'=>$gimg,'gprice'=>$gprice,'label'=>$catesjson,'gprices'=>$pricesjson,'gcontent'=>$gcontent,'gdpic'=>$gdpic]);


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
