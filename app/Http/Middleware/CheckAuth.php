<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            return $next($request);
        }

        // Autenticación básica (solo para desarrollo/pruebas)
        if (
            $request->getUser() === config('auth.basic_auth.username') &&
            $request->getPassword() === config('auth.basic_auth.password')
        ) {
            return $next($request);
        }

        return response('Unauthorized.', 401, ['WWW-Authenticate' => 'Basic']);
    }
}
