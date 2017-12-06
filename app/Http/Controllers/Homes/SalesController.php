<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Model\goods;
use App\Http\Model\user;
use App\Http\Model\goodstags;

use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $req = $request->only('search');
        $search = $req['search'];
        
        $count = goods::where('gname','like','%'.$search.'%')->count();
         // $res = goods::where('gname','like','%'.$search.'%')->paginate(12);
        $res = goods::where('gname','like','%'.$search.'%')->orderBy('xnumber', 'desc')->paginate(12);
         // $res = goods::where('gname','like','%'.$search.'%')->paginate(12);
        
        
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
        return view('homes.shop.search',compact('res','search','count','tag_a','tag_b','tag_c','goo','user','userid','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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
