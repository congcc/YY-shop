<?php

namespace App\Http\Controllers\Homes\seller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\orders;
use App\Http\model\ordersinfo;
use App\Http\model\shop;



class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $id=(session('userid'));

       $user=shop::where('uid',$id)->first();

       //获取shop表中uid和session相同的  sid
       $sid=$user['id'];
       // dd($su);

       // dd($user);
         //获取店家所有订单
        $res=orders::where('sid',$sid)->get();

        

        $m=array();
        foreach ($res as $key => $value) {
            
            $code= $value['o_code'];

            $result = ordersinfo::where('o_code',$code)->get();
        
            $m[$key] =  $result;
        }
// 
        // dd($result);
        // dd($m);
         // dd($res);
        
        
        // dd($o_code);

        // 获取订单号
         // $o=orders::where(o_code);

         // $code=orderinfo::where('o_code',)

         // dd($user);

         //dd($user);
        return view('homes.seller.wallet',["user"=>$user,"res"=>$res,"result"=>$result]);
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
