<?php

namespace App\Service;

use App\Models\EmployeeWorkHistory as WorkHistoryModel;

class EmployeeWorkHistory
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'hr/employee/workhistory';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function datatableData(array $request)
    //public function datatableData()
    {
        $emp_id = $request['employee_id'];
        $data = $this->getWorkHistoryByEmpId($emp_id);
        //$data = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function all()
    {
        return WorkHistoryModel::all();
    }
    
    public function getWorkHistoryById($id)
    {
        return WorkHistoryModel::find($id);
    }

    public function getWorkHistoryByEmpId($id)
    {
        return WorkHistoryModel::where('employee_id',$id)->get();
    }

    public function createWorkHistory(array $inputs)
    {
        return WorkHistoryModel::create($inputs);
    }

    public function update($id,array $inputs)
    {
        $workhistory = WorkHistoryModel::find($id);

        $workhistory->company = $inputs['company'];
        $workhistory->position = $inputs['position'];
        $workhistory->started_at = $inputs['started_at'];
        $workhistory->ended_at = $inputs['ended_at'];
        $workhistory->description = $inputs['description'];
        $workhistory->save();
    }

    public function destroy($id)
    {
        return WorkHistoryModel::destroy($id);
    }
}