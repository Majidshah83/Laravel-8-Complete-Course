<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Routemiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        if($request->age && $request->age<20){
            return redirect('routenoacess');              //routemiddlware redirect to routenoacess
        }
        return $next($request);
    }
}
