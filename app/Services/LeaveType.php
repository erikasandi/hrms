<?php

namespace App\Service;

use App\Models\LeaveType as LeavetypeModel;

class LeaveType
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'leavetype';

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
    
    public function leavetypeList($name, $defaultValue = null, $withBlank = false)
    {
        $data = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'type',
            'withBlank' => $withBlank
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $this->form->dbSelect($data, $name, $fields, ['class' => 'form-control', 'id' => 'leavetype']);
    }

    public function leavetypeSelect($name, $defaultValue = null, $withBlank = false)
    {
        $form = new FormGenerator();
        $data = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'type',
            'withBlank' => $withBlank,
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($data, $name, $fields, ['class' => 'form-control', 'id' => 'leavetype']);
    }
    
    public function all()
    {
        return LeavetypeModel::all();
    }

    public function createLeavetype(array $inputs)
    {
        return LeavetypeModel::create($inputs);
    }

    public function getLeavetypeById($id)
    {
        return LeavetypeModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $leavetype = LeavetypeModel::find($id);
        $leavetype->type = $inputs['type'];
        $leavetype->quota = $inputs['quota'];
        $leavetype->period = $inputs['period'];
        $leavetype->use_calendar = $inputs['use_calendar'];
        $leavetype->save();
    }

    public function destroy($id)
    {
        return LeavetypeModel::destroy($id);
    }
}