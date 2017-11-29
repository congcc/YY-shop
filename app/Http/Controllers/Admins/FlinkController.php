<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\friendship;

class FlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $res = friendship::all();
        return view('admins.Flink',['res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.Flinkadd');
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
      

          if(empty($request['fs_name']) || empty($request['fs_code']) || empty($request['fs_image']) || empty($request['fs_auth']) || empty($request['fs_link'])){
           echo "不能提交空数据";
            die;
        }

           
       if($request->hasFile('fs_image')){

            //修改名字
            $name = rand(1111,9999).time();

            //获取后缀
            $suffix = $request->file('fs_image')->getClientOriginalExtension();

            //移动图片
            $request->file('fs_image')->move('./public/Upload',$name.'.'.$suffix);
        }

            $res = $request->except('_token','fs_image');

            $res['fs_image'] = '/public/uploads/'.$name.'.'.$suffix;

            $res = friendship::insert($res);
            //判断是否上传成功
            if(!$res){
                echo "上传失败";
                die;
            } else {
                return redirect('/admin/flink');
            }

            //获取上传后的文件名称
          /*  $filename = $upload->getFileName();

            //实例化缩略对象
            $thumb = new Image('./Public/upload');

            //执行缩略，并获取缩略后的文件名称
            $thumbname = $thumb->thumb($filename,100,100,'th_');

            //判断是否缩略成功
            if(!$thumbname){
                echo "<script>alert('头像缩略时发生错误！');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
                die;
            }
            $data = array(
                'logo'=>$thumbname,
                'linkname'=>$_POST['linkname'],
                'content'=>$_POST['content'],
                'url'=>$_POST['url'],
                'ordernum'=>$_POST['ordernum'],
                'status'=>$_POST['status']
            );
        }else{
            //没有上传图片
            $data = array(
                'linkname'=>$_POST['linkname'],
                'content'=>$_POST['content'],
                'url'=>$_POST['url'],
                'ordernum'=>$_POST['ordernum'],
                'status'=>$_POST['status']
            );
        }

        //写入到数据库
        $conn = new Model('friendlink');
        $conn->add($data);
        if($conn){
            $this->index();
        }else{
            echo "<script>alert('友情连接添加失败');window.location.href='{$_SERVER['HTTP_REFERER']}';</script>";
        }
    }
*/

       // var_dump($data);
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
