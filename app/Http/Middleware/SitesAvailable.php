<?php

namespace App\Http\Middleware;

use App\Service\Site;
use Closure;
use Illuminate\Support\Facades\View;

class SitesAvailable
{
    private $siteService;

    /**
     * SitesAvailable constructor.
     * @param $siteService
     */
    public function __construct(Site $siteService)
    {
        $this->siteService = $siteService;
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
        $user = \Auth::user();

        // set site session
        if ($request->has('gSite')) {
            $gSite = $request->get('gSite');
            if ($gSite != '0') {
                $site = $this->siteService->getSiteById($gSite);
                $request->session()->set('gSite', $gSite);
                $request->session()->set('gSiteName', $site->name);
            } else {
                $request->session()->set('gSite', 0);
                $request->session()->set('gSiteName', 'All Sites');
            }
        } else {
            if (! $request->session()->has('gSite')) {
                $userSite = $user->sites->last();
                $request->session()->put('gSite', $userSite->id);
                $request->session()->put('gSiteName', $userSite->name);
            }
        }

        $gCurrentUrl = $request->url();
        View::share('gCurrentUrl', $gCurrentUrl);

        $userSites = $user->sites;
        View::share('gUserSites', $userSites);

        return $next($request);
    }
}
