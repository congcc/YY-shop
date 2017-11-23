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
        //
       /* $res = classify::where('id','1')->first();
        var_dump($res->name);
        if($res){

            return view('admins/typesonadd');
        }*/
          
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 123;
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
           $data = $request->except('_token');
        //    $res = goodscate::insert('cate_name',$data['cate_name']);    
          
            // $res = goodscate::insert($data);

            var_dump($data);
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
        $pcate_name = $res['cate_name'];
        $pid = $res['id'];
        
        return view('admins/typesonadd',['pcate_name'=>$pcate_name,'pid'=>$pid]);
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
        echo 123;
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
        echo 123;
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
        echo 123;
    }
}
