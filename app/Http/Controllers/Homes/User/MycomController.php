<?php

namespace App\Http\Controllers\Homes\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\review;
use App\Http\model\comments;

class MycomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取用户id
        $id=session('userid');

        //获取我的评论
        $re = review::where('uid',$id)->get();
        // dd($re);
        //定义一个空数组获取gid
        $arr=array();
        foreach ($re as $key => $value) {
            $gid = $value->gid;
            if($gid){
                array_push($arr,$gid);
            }
        }
        // $mm=array_unique($arr);
        // dd($mm);
        //获取comments回复我的内容
        // $array=array();
        foreach ($arr as $key => $value) {
           
            $gg=comments::where('gid',$value)->get();
           
              foreach ($gg as $key => $value) {
                $hh=$value->content;
                foreach ($re as $k1 => $v1) {
                    $v1['nn']=$hh;
                
                }
            }
            
        }
        

        


        return view('homes.user.mycomments',compact('re'));

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
