<?php

namespace App\Service;

use App\Models\EmployeeEducationHistory as EducationHistoryModel;

class EmployeeEducationHistory
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'hr/employee/educationhistory';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }
    
    public function datatableData(array $request)
    {
        $emp_id = $request['employee_id'];
        $data = $this->getEducationHistoryByEmpId($emp_id);
        //$data = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($data))
            ->addColumn('grade', function($query) {
                return $query->educationGrade->name;})
            ->addActions($actions)
            ->generate();
    }
    
    public function all()
    {
        return EducationHistoryModel::all();
    }
    
    public function getEducationHistoryById($id)
    {
        return EducationHistoryModel::find($id);
    }

    public function getEducationHistoryByEmpId($id)
    {
        return EducationHistoryModel::where('employee_id',$id)->get();
    }

    public function createEducationHistory(array $inputs)
    {
        return EducationHistoryModel::create($inputs);
    }

    public function update($id,array $inputs)
    {
        $data = EducationHistoryModel::find($id);

        $data->place = $inputs['place'];
        $data->score = $inputs['score'];
        $data->started_at = $inputs['started_at'];
        $data->ended_at = $inputs['ended_at'];
        $data->description = $inputs['description'];
        $data->education_grade_id = $inputs['education_grade_id'];

        $data->save();
    }

    public function destroy($id)
    {
        return EducationHistoryModel::destroy($id);
    }
}