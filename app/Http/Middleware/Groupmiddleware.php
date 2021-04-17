<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Groupmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   echo"middlware apply on this page";
        if($request->age && $request->age<20){
            return redirect('noacess');
        }
        return $next($request);
    }
}
