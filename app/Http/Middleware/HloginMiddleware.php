<?php

namespace App\Http\Middleware;

use Closure;

class HloginMiddleware
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

        if(!$uid){
            return redirect('/home/login');
        }else{
            return $next($request);
        }
    }
}
