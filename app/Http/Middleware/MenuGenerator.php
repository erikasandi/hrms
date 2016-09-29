<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class MenuGenerator
{
    /**
     * @var \App\MenuGenerator
     */
    private $generator;

    /**
     * MenuGenerator constructor.
     */
    public function __construct(\App\Service\MenuGenerator $generator)
    {
        $this->generator = $generator;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $menu = $this->generator->generateMenu($request);
        View::share('menu', $menu);

        $user = \Auth::user();
        View::share('gUser', $user);
        return $next($request);
    }
}
