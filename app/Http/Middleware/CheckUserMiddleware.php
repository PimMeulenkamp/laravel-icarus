<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserMiddleware
{
    public function handle(Request $request, Closure $next, int $roleId)
    {
        if (Auth::user()->role_id != $roleId) {
            abort(403);
        }
        return $next($request);
    }
}
