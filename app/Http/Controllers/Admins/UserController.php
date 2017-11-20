<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\admins;
use DB;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $res = admins::all();
        // 用户列表
        $res = DB::table('admins')->
            where('name','like','%'.$request->input('search').'%')->
            orderBy('id','asc')->
            paginate($request->input('num',10));
        return view('admins.user.index',['res'=>$res,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admins.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        var_dump($request);
        //表单验证
        $this->validate($request, [
            'name' => 'required|regex:/^\w{6,12}$/',
            'key' => 'required|regex:/^\S{6,16}$/',
            'phone'=>'required|regex:/^1[34578]\d{9}$/'
            
        ],[
            'name.required'=>'用户名不能为空!!!!!',
            'name.regex'=>'用户名格式不正确',
            'key.required'=>'密码不能为空!!!!!',
            'key.regex'=>'密码格式不正确',
            'phone.required'=>'手机号不能为空!!!!!',
            'phone.regex'=>'手机号格式不正确'
        ]);


        $res = $request->except('_token');

        $res['key'] = Hash::make($request->input('key'));

        $data = DB::table('admins')->insert($res);


        if($data){

            return redirect('/admin/user')->with('msg','添加成功');
        } else {

            return back()->withInput();
        }





        // return view('admins.userauth');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $res = DB::table('admins')->where('id',$id)->first();
        /*$res = money::where('mid',1)
                ->join('cinema','cinema.id','=','money.mid')
                ->select('cinema.cinema','cinema.legal','cinema.phone','money.money')
                ->get();*/
        

         return view('admins.user.show',['res'=>$res]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = DB::table('admins')->where('id',$id)->first();
        return view('admins.user.edit',['res'=>$res]);
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
        $res = $request->except('_token');
        var_dump($res);die();

        $data = DB::table('admins')->where('id',$id)->update($res);
        var_dump($data);
        die();
        // if($data){

        //     return redirect('/admin/user')->with('msg','修改成功');
        // } else {

        //     return back();
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // //
        // $res = DB::table('admins')->where('id',$id)->first();

        // var_dump($res);// 返回boolean
        // $data = unlink('.'.$res->profile);

        // if($data){

        //     $info = DB::table('admins')->where('id',$id)->delete();

        //     if($info){

        //         return redirect('/admin/user')->with('meg','删除成功');
        //     } else {

        //         return back();
        //     }
        // }
       $res=DB::table('user')->where('id',$id)->delete();
       if($res==1){
           return redirect('/admin/user')->with('meg','删除成功');
       }

    }
}
