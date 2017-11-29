<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\catetwo;
use App\Http\model\cateone;


class TypethreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
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
        //
            
            $data = $request->except('_token','profile');
            $id = $data['id'];
            $res = catetwo::where('id',$id)->update($data);
            
         
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
            //
            $second = cateone::where('id',$id)->first();

            $sename = $second['cate_name'];

            

            
            return view('admins.typethreeadd',['sename'=>$sename,'pid'=>$id]);
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
            $data = catetwo::where('id',$id)->first();

            $thrname = $data['cate_name'];
            return view('admins/typethreechange',['thrname'=>$thrname,'id'=>$id]);
            var_dump($thrname);
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
        echo 12312312;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = catetwo::where('id',$id)->delete();
        
    }

    public function aaaa(Request $request)
    {
        $data = $request->except('_token','profile');
        $pid = $data['pid'];
        $res = catetwo::insert($data);

    }
}
