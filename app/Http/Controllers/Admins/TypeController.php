<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\goods;
use App\Http\model\cateone;
use App\Http\model\catetwo;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
         $f = cateone::
            where('cate_name','like','%'.$request->input('search').'%')->
            orderBy('id','asc')->
            paginate($request->input('num',1));

            
         //   foreach ( $f as $k=>$v)

        $res = cateone::all();
            
        $sres = catetwo::all();
        
        /* foreach( $sres as $sk => $sv){
            $cate_name = $sv->cate_name;

        }*/

        // var_dump($sres);
         return view('admins.type',['res'=>$res,'sres'=>$sres,'f'=>$f,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        
        return view('admins/typeadd');
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
          
            
            $res = cateone::insert($data);
            if($res){
                return redirect('/admin/type');
            }
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
        $id = $res['id'];
        $cate_name = $res['cate_name'];
       
        return view('admins/typechange',['id'=>$id,'cate_name'=>$cate_name]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $data = $request->except('_token','profile');
    
       $res = cateone::where('id',$id)->update($data);
        if($res){
            return redirect('/admin/type');
        }
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
        $data = cateone::where('pid',$id)->first();

        if($data == null){
         $res = cateone::where('id',$id)->delete();
         return redirect('/admin/type');
         
         } else {

            return redirect('/admin/type');
        }
       // return $res;
    }
}
