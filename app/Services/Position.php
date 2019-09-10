<?php

namespace App\Service;

use App\Models\Position as PositionModel;

class Position
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'position';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function datatableData()
    {
        $positions = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($positions))
            ->addActions($actions)
            ->addColumn('division', function($position) {
                return $position->division->name;
            })
            ->generate();
    }

    public function positionList($name, $withBlank = false)
    {
        $position = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];        
        return $this->form->dbSelect($position, $name, $fields,['class' => 'form-control', 'id' => 'employee']);
    }

    //public function positionSelect($name, $withBlank = false, $selectedValue = '')
    public function positionSelect($name, $defaultValue = null, $withBlank)
    {
        $position = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $this->form->dbSelect($position, $name, $fields, ['class' => 'form-control', 'id' => 'position']);
    }

    public function all()
    {
        return PositionModel::all();
    }

    public function createPosition(array $inputs)
    {
        return PositionModel::create($inputs);
    }

    public function getPositionById($id)
    {
        return PositionModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $position = PositionModel::find($id);
        $position->name = $inputs['name'];
        $position->description = $inputs['description'];
        $position->division_id = $inputs['division_id'];
        $position->save();
    }

    public function destroy($id)
    {
        return PositionModel::destroy($id);
    }
}