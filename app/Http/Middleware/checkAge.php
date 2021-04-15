<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   echo"golbal mesgae";
        if($request->age && $request->age<18){     //check age if less than then cant acess website
           return redirect('noacess');
        }
        
        return $next($request);
    }
}
