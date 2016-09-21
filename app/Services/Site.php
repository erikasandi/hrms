<?php

namespace App\Service;

use App\Models\Site as SiteModel;

class Site
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'site';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function datatableData()
    {
        $users = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($users))
            ->addActions($actions)
            ->generate();
    }

    public function siteSelect($name, $withBlank = false, $selectedValue = '')
    {
        $sites = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'selected' => $selectedValue,
            'withBlank' => $withBlank
        ];
        return $this->form->dbSelect($sites, $name, $fields, ['class' => 'form-control']);
    }

    public function all()
    {
        return SiteModel::all();
    }

    public function createSite(array $inputs)
    {
        return SiteModel::create($inputs);
    }

    public function getSiteById($id)
    {
        return SiteModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $site = SiteModel::find($id);
        $site->name = $inputs['name'];
        $site->description = $inputs['description'];
        $site->save();
    }

    public function destroy($id)
    {
        return SiteModel::destroy($id);
    }
}