<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isUser
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
        //  if (Auth::check()) {
        //      return $next($request);
        //  }

        //  return redirect('/login');
        // if (Auth::user() && Auth::user()->userTypeId == 2) {
        //     return $next($request);
        // }
        // else if(Auth::user() && Auth::user()->userTypeId == 1){
        //     return redirect('/home');
        // }
           
    }
}
