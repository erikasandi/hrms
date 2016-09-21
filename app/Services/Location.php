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

    public function getConditionById($id)
    {
        return LocationModel::find($id);
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
        return LocationModel::destroy($id);
    }

    private function getLocations()
    {
        return LocationModel::all(['id', 'name', 'description']);
    }

    public function parentSelect($name, $selected = '')
    {
        $form = new FormGenerator();
        $data = $this->getLocations();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'selected' => $selected,
            'withBlank' => true,
        ];
        return $form->dbSelect($data, $name, $fields, ['class' => 'form-control']);
    }
}