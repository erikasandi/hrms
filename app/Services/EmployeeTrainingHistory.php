<?php

namespace App\Service;

use App\Models\EmployeeTrainingHistory as TrainingHistoryModel;

class EmployeeTrainingHistory
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'hr/employee/traininghistory';

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
        $data = $this->getTrainingHistoryByEmpId($emp_id);
        //$data = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($data))
            ->addActions($actions)
            ->generate();
    }

    public function all()
    {
        return TrainingHistoryModel::all();
    }
    
    public function getTrainingHistoryById($id)
    {
        return TrainingHistoryModel::find($id);
    }

    public function getTrainingHistoryByEmpId($id)
    {
        return TrainingHistoryModel::where('employee_id',$id)->get();
    }

    public function createTrainingHistory(array $inputs)
    {
        return TrainingHistoryModel::create($inputs);
    }

    public function update($id,array $inputs)
    {
        $traininghistory = TrainingHistoryModel::find($id);

        $traininghistory->place = $inputs['place'];
        $traininghistory->subject = $inputs['subject'];
        $traininghistory->started_at = $inputs['started_at'];
        $traininghistory->ended_at = $inputs['ended_at'];
        $traininghistory->description = $inputs['description'];
        $traininghistory->save();
    }

    public function destroy($id)
    {
        return TrainingHistoryModel::destroy($id);
    }
}