<?php

namespace App\Http\Middleware;

use Closure;
use session;


class LoginMiddleware
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
    
        $aid = session('adminid');
        

       if($aid){
            return $next($request);
        } else {
           return redirect('/admin/login');
        }
    }
}
