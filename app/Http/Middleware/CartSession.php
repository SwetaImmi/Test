<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CartSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check()) {
        //     if (Auth::user()->role == 'Customer') { // if the current role is Administrator
        //         return $next($request);
        //     // }elseif(Auth::user()->role == 'User'){
        //     //     return $next($request);
        //     }
        // }
        // return redirect('signUp')->withError('Register your name first');
        // abort(403, "Cannot access to restricted page");
        return $next($request);
    }
}
