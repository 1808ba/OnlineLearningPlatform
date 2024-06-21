<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
            if ($role == 'admin') {
                return redirect('/admin');
            } elseif ($role == 'teacher') {
                return redirect('/teacher');
            } elseif ($role == 'student') {
                return redirect('/student');
            }
        }

        return $next($request);
    }
}
