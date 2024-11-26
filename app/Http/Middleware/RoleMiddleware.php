<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        // if (!Session::has('email')) {
        //     return redirect('/loginfront'); 
        // }

        // Ambil role pengguna dari session
        $role = Session::get('role');

        
        // // Arahkan berdasarkan role
        // if ($role == 'admin') {
        //     return redirect('/backend_home');
        // } elseif ($role == 'user') {
        //     return redirect('/index'); 
        // }

        return $next($request);
    }
}