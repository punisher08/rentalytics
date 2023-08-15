<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && auth()->user()->role === 'admin') {
           return $next($request);
        }else if(auth()->user() && auth()->user()->role === 'owner'){
            return redirect()->route('owner-dasboard');
        }else if(auth()->user() && auth()->user()->role === 'renter'){
            return redirect()->route('renter-dasboard');
        }else{
            return redirect()->route('home');
        }
    }
}
