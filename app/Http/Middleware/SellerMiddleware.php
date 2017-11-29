<?php

namespace App\Http\Middleware;

use Closure;

use App\Http\model\user;

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
         // dd($uid);
         $utype =user::find($uid);
         $mm = $utype['utype'];
         // dd($utype);
        // if($uid && $mm==1){
           
        //    return $next($request);
        // }else{

        //     return redirect('/home/login');
        // }

         if($uid){
            if($mm == '2'){
               return $next($request); 
            }else{
              return redirect('/home/sregister');  
            }
         }else{
            return redirect('/home/login');
         }


    } 

}
