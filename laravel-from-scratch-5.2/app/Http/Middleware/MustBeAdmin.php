<?php

namespace App\Http\Middleware;
use Illuminate\Auth\AuthenticationException;

use Closure;

class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user;

        if ($user && $user->name == "Marko Burazin")
        {
            return $next($request);
        }

        //abort(403, 'Unauthorized action');
        throw new AuthenticationException;
    }
}
