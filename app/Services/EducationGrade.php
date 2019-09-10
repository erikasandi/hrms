<?php

namespace App\Service;

use App\Models\EducationGrade as EducationgradeModel;

class EducationGrade
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'education';

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
    
    public function educationgradeList($name, $withBlank = false)
    {
        $data = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];
        return $this->form->dbSelect($data, $name, $fields, ['class' => 'form-control', 'id' => 'education']);
    }

    public function educationgradeSelect($name, $defaultValue = null, $withBlank = false)
    {
        $form = new FormGenerator();
        $data = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank,
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($data, $name, $fields, ['class' => 'form-control', 'id' => 'education']);
    }
    
    public function all()
    {
        return EducationgradeModel::all();
    }

    public function createEducationgrade(array $inputs)
    {
        return EducationgradeModel::create($inputs);
    }

    public function getEducationgradeById($id)
    {
        return EducationgradeModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $leavetype = EducationgradeModel::find($id);
        $leavetype->name = $inputs['name'];
        $leavetype->description = $inputs['description'];
        $leavetype->save();
    }

    public function destroy($id)
    {
        return EducationgradeModel::destroy($id);
    }
}