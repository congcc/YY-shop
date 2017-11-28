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

        //������������
        $c_one = cateone::where('id',$shop['stype'])->first();
        //���̶�������
        $c_two = cateone::where('pid',$shop['stype'])->get();
        // dd($c_two[0]['id']);
        //������������
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
        
        //��ȡ���͹���������
        $res = $request->except('_token');
        
        //����һ�������洢��Ʒ��������
        $cates = array();
        
        //��ӵ�һ���������
        $cates[0] = $res['arr3'];       
        
        //��ӵڶ����������
        $cates[1] = $res['arr4'];       
        
        //������תΪjson�ַ���
        $catesjson = json_encode($cates);

        //����һ�������洢��Ӧ������Ʒ�۸������
        $prices = array_combine($res['arr1'], $res['arr2']);

        //������תΪjson�ַ���
        $pricesjson = json_encode($prices);

        $sid = 1;
        $clid = 100000;
        $gname = '��ʦ����������ζ��Ƿ�������������������ʳ����������ʽ15��';
        $gimg = '/uploads/goodspic/g1.jpg';
        $gprice = 10;
        $gstate = 2;
        $gstatus = 1;

        $bool = goods::insert(['sid'=>$sid,'clid'=>$clid,'gname'=>$gname,'gimg'=>$gimg,'gprice'=>$gprice,'gstate'=>$gstate,'gstatus'=>$gstatus,'label'=>$catesjson,'gprices'=>$pricesjson]);

        //�ж��Ƿ���ӳɹ�
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

        //     return redirect('/home/seller/goodsup')->with('��ӳɹ�');
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

        // // ��֤
        // // ��ȡ�ļ�·��
        // $transverse_pic = $file->getRealPath();
        
        // // ��ȡ��׺��
        // $postfix = $file->getClientOriginalExtension();
        // $fileName = md5(time().rand(0,10000)).'.'.$postfix;
        
        // $disk = QiniuStorage::disk('qiniu');        //��ʼ����ţ

        // // $disk = Storage::disk('qiniu');
        // $disk->put('img/'.$fileName, $transverse_pic);
        // //dd($file);
        // return $fileName;       


            $file = $request->file('file');        //�����ļ���Ϣ(qiniu��input��nameֵ)
            $disk = QiniuStorage::disk('qiniu');        //��ʼ����ţ
            $name = rand(1111,9999).time();         // ����ļ���
            $suffix = $file->getClientOriginalExtension();      //��ȡ�ļ���׺��
            $filename = $name.$suffix;          //ƴ��һ���µ��ļ���
            $bool = $disk->put('img/image_'.$filename,file_get_contents($file->getRealPath()));         //�ϴ�

            if($bool){
                return $filename;
            }
        
    }
}
