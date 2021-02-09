<?php

namespace App\Http\Middleware;

use Closure;

class admin
{

    public function handle($request, Closure $next)
    {
        $role = auth()->user()->role;
        if($role == 'user'){
            return redirect('/home');
        } else if($role == 'admin'){
            return $next($request);
        }
    }
}
