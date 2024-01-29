<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    public function handle($request, Closure $next)
    {
        $token = $request->route('token');

        if ($token !== env('login_token')) {
            // Token doesn't match, redirect or show an error
            return abort(404);
        }

        return $next($request);
    }
}
