<?php

namespace App\Service;

use App\Models\Division as DivisionModel;

class Division
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'division';

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

    public function divisionSelect($name, $defaultValue = null)
    {
        $form = new FormGenerator();
        $division = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name'
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($division, $name, $fields, ['class' => 'form-control', 'id' => 'division']);
    }

    public function all()
    {
        return DivisionModel::all();
    }

    public function createDivision(array $inputs)
    {
        return DivisionModel::create($inputs);
    }

    public function getDivisionById($id)
    {
        return DivisionModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $division = DivisionModel::find($id);
        $division->name = $inputs['name'];
        $division->description = $inputs['description'];
        $division->save();
    }

    public function destroy($id)
    {
        return DivisionModel::destroy($id);
    }
}