<?php

namespace App\Service;

use App\Models\Religion as ReligionModel;

class Religion
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'religion';

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

    public function religionList($name, $withBlank = false)
    {
        $religion = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];
        return $this->form->dbSelect($religion, $name, $fields,['class' => 'form-control', 'id' => 'employee']);
    }

    //public function religionSelect($name, $withBlank = false, $selectedValue = '')
    public function religionSelect($name, $defaultValue = null, $withBlank)
    {
        $religion = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',            
            'withBlank' => $withBlank
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $this->form->dbSelect($religion, $name, $fields, ['class' => 'form-control', 'id' => 'religion']);
        //return $this->form->dbSelect($sites, $name, $fields, ['class' => 'form-control']);
    }

    public function all()
    {
        return ReligionModel::all();
    }

    public function createReligion(array $inputs)
    {
        return ReligionModel::create($inputs);
    }

    public function getReligionById($id)
    {
        return ReligionModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $religions = ReligionModel::find($id);
        $religions->name = $inputs['name'];
        $religions->save();
    }

    public function destroy($id)
    {
        return ReligionModel::destroy($id);
    }
}