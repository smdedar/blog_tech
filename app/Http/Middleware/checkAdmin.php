<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class checkAdmin
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
        //return $next($request);
        if(Auth::user()->email == "dedar3000@gmail.com"){
            //return view('admin');
            return $next($request );
        }
        else{
            return redirect('home');
        }
    }
}
