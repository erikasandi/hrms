<?php

namespace App\Service;

use App\Models\MaritalStatus as MaritalStatusModel;

class MaritalStatus
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'marital';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function datatableData()
    {
        $maritals = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($maritals))
            ->addActions($actions)
            ->generate();
    }

    public function maritalList($name, $withBlank = false)
    {
        $form = new FormGenerator();
        $genders = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];
        return $form->dbSelect($genders, $name, $fields,['class' => 'form-control', 'id' => 'employee']);
    }

    public function maritalSelect($name, $defaultValue = null, $withBlank)    
    {
        $marital = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];        
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        
        return $this->form->dbSelect($marital, $name, $fields, ['class' => 'form-control', 'id' => 'marital']);
    }

    public function all()
    {
        return MaritalStatusModel::all();
    }

    public function createMaritalStatus(array $inputs)
    {
        return MaritalStatusModel::create($inputs);
    }

    public function getMaritalById($id)
    {
        return MaritalStatusModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $gender = MaritalStatusModel::find($id);
        $gender->name = $inputs['name'];
        $gender->description = $inputs['description'];
        $gender->save();
    }

    public function destroy($id)
    {
        return MaritalStatusModel::destroy($id);
    }
}