<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\goods;
use App\Http\Model\goodstags;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homes.shop.search');
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
        
        
        return view('homes.shop.search',compact('res','search','count','tag_a','tag_b','tag_c','goo'));
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
