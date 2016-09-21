<?php

namespace App\Service;

use App\Models\Site as SiteModel;

class Site
{

    use FormSelect;

    private $form;

    /**
     * Site constructor.
     * @param $form
     */
    public function __construct(FormGenerator $form)
    {
        $this->form = $form;
    }

    public function siteSelect($name, $withBlank = false, $selectedValue = '')
    {
        $sites = $this->all();
        return $this->select($name, $sites, $withBlank, $selectedValue);
    }

    public function all()
    {
        return SiteModel::all(['id', 'name']);
    }
}