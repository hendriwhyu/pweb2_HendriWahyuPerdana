<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isRole
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
        if (Auth::check()) {
            if (Auth::user()->id_role == '1') {
                return $next($request);
                
            }else if(Auth::user()->id_role == '2'){
                return $next($request);
            } else if (Auth::user()->id_role == '2') {
                return $next($request);
            }
            else {
                return redirect('/login');
            }
        } else {
            return redirect('login')->with('error', 'kamu tidak memiliki akses');
        }
        return $next($request);
    }
}
