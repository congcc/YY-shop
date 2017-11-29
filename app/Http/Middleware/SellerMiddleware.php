<?php

namespace App\Http\Middleware;

use Closure;

use App\Http\model\user;
use App\Http\Model\shop;


class SellerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
         $uid = session('userid');
         // $uid = 2;
         $utype =user::find($uid);
         $mm = $utype['utype'];
         // dd($utype);


         //查询商户店铺状态
         $shop = shop::where('uid',$uid)->first();
         $sauth = $shop['sauth'];
         

         if($uid){
            //如果拥有店铺
            if($mm == '2'){
                //判断店铺状态
                if($sauth == '1'){
                 return $next($request); 
                }else{
                    return redirect('/home/user/auth');
                }
            //没有店铺
            }else{
              return redirect('/home/user/shopapply');  
            }
         }else{
            return redirect('/home/login');
         }


    } 

}
