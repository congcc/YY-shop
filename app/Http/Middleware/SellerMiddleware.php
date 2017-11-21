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
        // return $next($request);

    //     $id = session('userid');
    //    

    //     if(!$id){
    //         return redirect('/home/login');
    //     }else{
    //         if($utype['utype'] == 1 )
    //         return $next($request);
    //     }

    // }

         $uid = session('userid');
         $utype =user::find($uid);
         $mm = $utype['utype'];
        if($uid && $mm==1){
           
           return $next($request);
        }else{

            return redirect('/home/login');
        }


    } 

}
