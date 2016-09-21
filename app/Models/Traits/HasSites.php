<?php

namespace App\Models;

trait HasSites {

    public function sites()
    {
        return $this->belongsToMany(
            Site::class,
            'user_has_sites'
        );
    }

    public function assignSiteById(...$ids)
    {
        $sites = collect($ids)
            ->flatten()
            ->map(function ($site) {
                return $this->getStoredSite($site);
            })
            ->all();

        $this->sites()->saveMany($sites);

        return $this;
    }

    public function syncSitesById(...$ids)
    {
        $this->sites()->detach();

        return $this->assignSiteById($ids);
    }

    /**
     * @param $site
     *
     * @return Site
     */
    protected function getStoredSite($site)
    {
        return app(Site::class)->find($site);
    }

    public function removeSites()
    {
        $this->sites()->detach();
    }

}