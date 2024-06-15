<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckBanMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->locked_until && $user->locked_until->isFuture()) {
            // User is banned - you can redirect them to a banned page or handle it as per your application's logic
            return redirect()->route('banned');
        }

        return $next($request);
    }
}
