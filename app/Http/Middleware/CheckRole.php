<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
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
        // echo "we are here to define gloabal Middleware for avery page to show this mesg";
       // dd($request->role);
        if($request->role!='admin'){
            return redirect("/");
        }
        return $next($request);
    }
}
