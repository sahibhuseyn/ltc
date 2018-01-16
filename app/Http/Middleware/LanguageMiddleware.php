<?php

namespace App\Http\Middleware;

use App\Language;
use Closure;

class LanguageMiddleware
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
        $visited = session('visited');

        if ($visited != true) {
            session(['language' => 'az']);
            session(['visited' => true]);
        }

        app()->setLocale(session('language'));

        return $next($request);
    }
}
