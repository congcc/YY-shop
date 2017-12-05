<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\model\goodscate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\catetwo;
use App\Http\model\cateone;

class TypesonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->except('_token','profile');
        $id = $data['id'];
        $res = cateone::where('id',$id)->update($data);
        var_dump($res);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token','profile');
        $id = $data['id'];
        $res = cateone::where('id',$id)->update($data);
        var_dump($res);
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            
        
        $res = cateone::where('id',$id)->first();
        $fcate_name = $res['cate_name'];
        
        
        return view('admins/typesonadd',['fcate_name'=>$fcate_name,'id'=>$id]);
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
        $data = cateone::where('id',$id)->first();
        
        $sename = $data['cate_name'];
     
        
       
       return view('admins/typesechange',['id'=>$id,'sename'=>$sename]);
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
        
        $data = catetwo::where('pid',$id)->first();

        if($data == null){
         $res = cateone::where('id',$id)->delete();
         return redirect('/admin/type');
         
         } else {

            return redirect('/admin/type');
        }
        
       
    }
}
