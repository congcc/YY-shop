<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\goods;
use App\Http\model\cateone;
use App\Http\model\catetwo;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
        $res = cateone::all();

        foreach($res as $k => $v){
           $id = $v->id;
        }/*
            if($id>7){
                $fid = $id;
            }*/
            var_dump($id);die;
        $sres = catetwo::where('pid',$id)->get();
        
        /* foreach( $sres as $sk => $sv){
            $cate_name = $sv->cate_name;

        }*/

    
         return view('admins.type',['res'=>$res,'sres'=>$sres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admins/typeadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
             /* $data = $request->except('_token');
             
             $pid = goods::where('cate_name',$data['cate_name'])->get();
            dd($pid);*/
        //      $res = table('goods')->insert('data')->all();
          
        //        $res = DB::table('goodscate')->insert($data.$pid);

         //   var_dump($pid);
            $data = $request->except('_token');
           $dataone = cateone::where('cate_name',$data['fname'])->first();
            $pid = $dataone['id'];
         //   var_dump($pid);
            $data['pid'] = $pid;
            array_shift($data);

            $res = cateone::insert($data);
            if($res){
            //    alert('老铁，添加成功了');
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
        $res = cateone::where('id',$id)->delete();

        return $res;
    }
}
