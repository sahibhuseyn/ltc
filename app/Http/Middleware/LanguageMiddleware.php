<?php

namespace App\Http\Middleware;

use App\Category;
use App\Event;
use App\Language;
use App\Type;
use Closure;
use Illuminate\Support\Facades\View;

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
        setlocale(LC_TIME, session('language'));

        $types = Type::getTypesByLanguage(session('language'));
        $languages = Language::getAllLanguages();
        $categories = Category::getCategoriesByLanguage(session('language'));
        $events = Event::getEvents(session('language'));


        View::share('__LTCTYPES__', $types);
        View::share('__LTCLANGUAGES__', $languages);
        View::share('__LTCCATEGORIES__', $categories);
        View::share('__LTCEVENTS__', $events);



        return $next($request);
    }
}
