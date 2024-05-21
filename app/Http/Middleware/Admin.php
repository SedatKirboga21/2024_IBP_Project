<?php

namespace App\Http\Middleware;
use App\Http\Controllers\AdminController;

// Somewhere in your code, where you want to logout the admin user


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class Admin
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->usertype != 'admin'){
            return redirect('/');
        }
        return $next($request);
    }

}
