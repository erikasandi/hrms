<?php

namespace App\Service;

use App\Models\LeaveEntitlement as LeaveentitlementModel;

class LeaveEntitlement
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'leaveentitlement';

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
            ->addColumn('employee', function($query) {
                return $query->employee->firstname;})
            ->addColumn('leavetype', function($query) {
                return $query->leaveType->type;})
            ->addActions($actions)
            ->generate();
    }
    /*
    public function leavetypeSelect($name, $defaultValue = null)
    {
        $form = new FormGenerator();
        $leavetype = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'type'
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($division, $name, $fields, ['class' => 'form-control', 'id' => 'division']);
    }
    */
    public function all()
    {
        return LeaveentitlementModel::orderBy('id')->get();
    }

    public function createLeaveentitlement(array $inputs)
    {
        return LeaveentitlementModel::create($inputs);
    }

    public function getLeaveentitlementById($id)
    {
        return LeaveentitlementModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $leavetype = LeaveentitlementModel::find($id);        
        $leavetype->leave_type_id = $inputs['leave_type_id'];
        $leavetype->leave_period_id = $inputs['leave_period_id'];
        $leavetype->deposit = $inputs['deposit'];
        $leavetype->save();
    }

    public function destroy($id)
    {
        return LeaveentitlementModel::destroy($id);
    }
}