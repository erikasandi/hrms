<?php

namespace App\Service;


use App\Models\Location as LocationModel;

class Location
{
    use DatatableParameters;

    protected $baseUrl = 'asset-location';

    public function datatableData()
    {
        $locations = $this->getLocations();
        $actions = $this->actionParameters(['edit','delete']);

        return (new DatatableGenerator($locations))
            ->addActions($actions)
            ->generate();
    }

    public function getLocationById($id)
    {
        if ($this->checkIfDataExistsOnThisSite($id)) {
            return LocationModel::find($id);
        }

        return false;
    }

    public function store(array $inputs)
    {
        return LocationModel::create($inputs);
    }

    public function update($id, array $inputs)
    {
        $location = LocationModel::find($id);
        $location->name = $inputs['name'];
        $location->description = $inputs['description'];
        $location->parent_id = $inputs['parent_id'];
        // $location->image_path = $inputs['image_path'];
        return $location->save();
    }

    public function destroy($id)
    {
        if ($this->checkIfDataExistsOnThisSite($id)) {
            return LocationModel::destroy($id);
        }

        return false;
    }

    public function locationSelect($name, $selected = '', $withBlank = true)
    {
        $form = new FormGenerator();
        $data = $this->getLocations();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'selected' => $selected,
            'withBlank' => $withBlank,
        ];
        return $form->dbSelect($data, $name, $fields, ['class' => 'form-control']);
    }

    public function locationNestedSelect($name, $selected = '', $withBlank = true)
    {
        $form = new FormGenerator();
        $data = $this->getLocations();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'selected' => $selected,
            'withBlank' => $withBlank,
        ];
        return $form->nestedDbSelect($data, $name, $fields, ['class' => 'form-control']);
    }

    private function getLocations()
    {
        $siteId = session('gSite');
        $query = LocationModel::where('id', '<>', 0);
        $query = ( $siteId != '0' ) ? $query->where('site_id', $siteId) : $query ;

        return $query->get();
    }

    public function getLocationByName($name)
    {
        return LocationModel::where('name', $name)->first();
    }

    private function checkIfDataExistsOnThisSite($id)
    {
        $siteId = session('gSite');
        $query = LocationModel::where('id', $id)->where('site_id', $siteId);
        if ($query->count() > 0) {
            return true;
        }
        return false;
    }
}