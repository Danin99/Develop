<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
     {
        if (!$request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
    }

    protected function unauthenticated($request, array $guards)
    {
        abort(response()->json(
            [
                'status' => '401',
                'message' => 'Unauthorized',
            ],
            401
        ));
    }

    //protected function redirectTo($request)
    //{
    //    if (! $request->expectsJson()) {
    //        return route('login');
    //    }
    //}
}
