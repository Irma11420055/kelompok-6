<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsUser
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
        if (Auth::check()) {
            //Login Success

            if(Auth::user()->role == 'User'){
                return $next($request);
            }
            else{
                return redirect()->route('adminHome');
            }
        }else{
            return $next($request);
        }
    }
}
