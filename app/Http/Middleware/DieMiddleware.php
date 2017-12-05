<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\model\website;

class DieMiddleware
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

        $res = website::where('w_status',1)->first();



        if(!$res){
            return view('/homes/404');
           } else {
            
            return $next($request);
           }
    }
} 
