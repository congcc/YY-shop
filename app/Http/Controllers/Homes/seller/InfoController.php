<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\userinfo;
use App\Http\model\user;


class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //从session中获取登录id
        // dd(session('userid'));

        
        //从userinfo中获取登陆陆者的信息
       $user =userinfo::find(session('userid'));

      // $id=session('userid');
       //从user表中查id所有信息
       // $res=user::find(session('userid'));
       // dd ($user);

       //将信息传入视图页
        return view('homes.seller.info',["user"=>$user]);


        // $res = DB::select('select * from 111');
        // // dd($res);
        // var_dump($res);
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
        //dd($id);
         $user =userinfo::find(session('userid'));
         // $res=user::find(session('userid'));
         return view('homes.seller.infoedit',["user"=>$user]);

       // return view('homes.seller.infoedit');
        
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
        // echo $id;
        // die;
        // var_dump ($id);
        //var_dump($_POST);die;
        $input=$request->except('_token','_method','phone');
       // dd($input);

        $info = userinfo::find($id);
        // $user=user::find($id);
        
       //  return view('homes.s1eller.info');


        // $res=$input->except('phone');
        $res=userinfo::where('id',$id)->update($input);
        //var_dump($res);
        // $user=user::find($id);
        // $user->phone=$input;


    
        //$info->update($input);
        //$user->update($input);
        if($res){
            return redirect('/home/seller/info');

        }else{
            return back();
        }
        

        // $res=array[];
        // dd($input);

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
