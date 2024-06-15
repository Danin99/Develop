<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class CheckPermission
{
    public function handle(Request $request, Closure $next, $permission)
    {
        $user = Auth::user();

        if ($user->role === 'super_admin') {
            return $next($request);
        }

        if (!$user->hasPermissionTo($permission)) {
            throw UnauthorizedException::forPermissions($permissions);
        }

        return $next($request);
    }
}
