<?php

namespace App\Service;

use App\Models\Gender as GenderModel;

class Gender
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'gender';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function datatableData()
    {
        $genders = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($genders))
            ->addActions($actions)
            ->generate();
    }

    public function genderList($name, $withBlank = false)
    {
        $form = new FormGenerator();
        $genders = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];
        return $form->dbSelect($genders, $name, $fields, ['class' => 'form-control', 'id' => 'sex']);
    }

    public function genderSelect($name, $defaultValue = null, $withBlank )
    {
        $data = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];
         if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $this->form->dbSelect($data, $name, $fields, ['class' => 'form-control', 'id' => 'sex']);
    }

    public function all()
    {
        return GenderModel::all();
    }

    public function createGender(array $inputs)
    {
        return GenderModel::create($inputs);
    }

    public function getGenderById($id)
    {
        return GenderModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $gender = GenderModel::find($id);
        $gender->name = $inputs['name'];
        $gender->description = $inputs['description'];
        $gender->save();
    }

    public function destroy($id)
    {
        return GenderModel::destroy($id);
    }
}