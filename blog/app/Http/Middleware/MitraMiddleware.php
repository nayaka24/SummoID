<?php

namespace App\Http\Middleware;

use Closure;
use  Illuminate\Support\Facades\Auth;

class MitraMiddleware
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
        if(Auth::User()->level == "mitra")
        {
            return $next($request);
        }
        else
        {
            return redirect('/')->with('status','Anda tidak memiliki akses tersebut!');
        }
    }
}
