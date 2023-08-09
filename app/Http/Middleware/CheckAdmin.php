<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class CheckAdmin
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
        if (!Auth::check()) {
           return redirect()->route('login');
        }else{
            if (Auth::user()->role == 1) {
                return $next($request);
            }else{
                return redirect()->route('home');
            }
        }
        
    }
}
