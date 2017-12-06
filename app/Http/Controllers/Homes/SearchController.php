<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\goods;
use App\Http\Model\user;
use App\Http\Model\goodstags;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $req = $request->only('index_none_header_sysc');

        $search = $req['index_none_header_sysc'];
        $count = goods::where('gname','like','%'.$search.'%')->count();
        $res = goods::where('gname','like','%'.$search.'%')->paginate(12);
       
        
        $result = goodstags::where('cateid',$res[0]['clid'])->get();

        $num =  goodstags::where('cateid',$res[0]['clid'])->count();


        for ($i=0; $i < $num ; $i++) {
            
            $tag_a[$i] = $result[$i]->tag_a;
            $tag_b[$i] = $result[$i]->tag_b;
            $tag_c[$i] = $result[$i]->tag_c;
        }
        $tag_a = array_unique($tag_a);
        $tag_b = array_unique($tag_b);
        $tag_c = array_unique($tag_c);

        // dd($tag_a);

        //掏钱出现商品
        $array= array(251,250,218,188,149);
        $goo = array();
        for ($j=0; $j < 3 ; $j++) { 
            $goo[$j] = goods::where('id',$array[rand(0,4)])->first();
        }
        
        $userid = 0;

         if(session('userid')){
            $user = user::where('id',session('userid'))->first();
            $userid = 1;
         }
        return view('homes.shop.search',compact('search','count','tag_a','tag_b','tag_c','goo','user','userid','request','res'));
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
        //获取要搜索的内容
        $req = $request->only('index_none_header_sysc');
        $search = $req['index_none_header_sysc'];

        //查询搜索到的条数
        $count = goods::where('gname','like','%'.$search.'%')->count();
        //分页12条查询信息
        $res = goods::where('gname','like','%'.$search.'%')->paginate(12);
       
        //查询相同的商品分类id(3级)
        $result = goodstags::where('cateid',$res[0]['clid'])->get();
        //统计数量
        $num =  goodstags::where('cateid',$res[0]['clid'])->count();

        //for循环取出品牌种类标签
        for ($i=0; $i < $num ; $i++) {
            
            $tag_a[$i] = $result[$i]->tag_a;
            $tag_b[$i] = $result[$i]->tag_b;
            $tag_c[$i] = $result[$i]->tag_c;
        }
        //移除数组中重复的值
        $tag_a = array_unique($tag_a);
        $tag_b = array_unique($tag_b);
        $tag_c = array_unique($tag_c);

        // dd($tag_a);

        //掏钱出现商品数组
        $array= array(251,250,218,188,149);
        $goo = array();
        //随机查询数组内商品
        for ($j=0; $j < 3 ; $j++) { 
            $goo[$j] = goods::where('id',$array[rand(0,4)])->first();
        }
        
        //判断用户是否登录
        $userid = 0;

        //登录查询信息
         if(session('userid')){
            $user = user::where('id',session('userid'))->first();
            $userid = 1;
         }
         //返回页面
        return view('homes.shop.search',compact('search','count','tag_a','tag_b','tag_c','goo','user','userid','request','res'));
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
