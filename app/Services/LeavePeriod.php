<?php

namespace App\Service;

use App\Models\LeavePeriod as LeaveperiodModel;

class LeavePeriod
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'leaveperiod';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function datatableData()
    {
        $leaveperiods = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($leaveperiods))
            ->addActions($actions)
            ->generate();
    }
    
    public function leaveperiodList($name, $withBlank = false)
    {
        $data = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];
        return $this->form->dbSelect($data, $name, $fields, ['class' => 'form-control', 'id' => 'leave_period_id']);
    }

    public function leaveperiodSelect($name, $defaultValue = null)
    {
        $form = new FormGenerator();
        $data = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name'
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($data, $name, $fields, ['class' => 'form-control', 'id' => 'leaveperiod']);
    }
    
    public function all()
    {
        return LeaveperiodModel::all();
    }

    public function createLeaveperiod(array $inputs)
    {
        return LeaveperiodModel::create($inputs);
    }

    public function getLeaveperiodById($id)
    {
        return LeaveperiodModel::find($id);
    }

    public function getCurrentLeavePeriod()
    {
        return LeaveperiodModel::where('ended_date', '>=', date('Y-m-d'))->orderBy('ended_date', 'desc')->first();       
    }

    public function update($id, array $inputs)
    {
        $leaveperiod = LeaveperiodModel::find($id);
        $leaveperiod->name = $inputs['name'];
        $leaveperiod->started_date = $inputs['started_date'];
        $leaveperiod->ended_date = $inputs['ended_date'];
        $leaveperiod->save();
    }

    public function destroy($id)
    {
        return LeaveperiodModel::destroy($id);
    }
}