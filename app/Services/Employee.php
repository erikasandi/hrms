<?php

namespace App\Service;

use App\Models\Employee as EmployeeModel;

class Employee
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'hr/employee';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    //public function positionSelect($name, $withBlank = false, $selectedValue = '')
    public function employeeSelect($name, $defaultValue = null, $withBlank)
    {
        $employee = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'firstname',            
            'withBlank' => $withBlank
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $this->form->dbSelect($employee, $name, $fields, ['class' => 'form-control', 'id' => 'employee']);
    }

    public function ByIdGetemployee($name, $id)
    {
        $employee = $this->getEmployeeById($id);
        $fields = [
            'id' => 'id',
            'value' => 'firstname',
        ];
       
        return $this->form->dbSelect($employee, $name, $fields, ['class' => 'form-control', 'id' => 'employee']);
    }

    public function employeeList($name, $withBlank = false)
    {
        $employee = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'firstname',
            'withBlank' => $withBlank
        ];
        return $this->form->dbSelect($employee, $name, $fields, ['class' => 'form-control', 'id' => 'employee_id']);
    }

    public function datatableData()
    {
        $employees = $this->status();
        $actions = $this->actionParameters(['edit', 'delete', 'detail']);

        return (new DatatableGenerator($employees))
            ->addActions($actions)
            
            ->addColumn('employeeDivision', function($query) {
                return $query->employeePosition->position->division->name;
            })
                        
            ->addColumn('employeePosition', function($query){
                return $query->employeePosition->position->name;
            })

            ->addColumn('employeeSuperior',function($query){
                return $query->employeeSuperior->superior->firstname;
            })

            ->addColumn('employeeGender',function($query){
                return $query->employeeGender->name;
            })
            
            ->addColumn('employeeStatus',function($query){
                return $query->employeeStatus->name;
            })
            ->generate();
    }

    public function all()
    {
        return EmployeeModel::all();
    }

    public function status()
    {
        return EmployeeModel::where('status','!=',0)->get();
    }

    public function createEmployee(array $inputs)
    {
        return EmployeeModel::create($inputs);
    }

    public function getEmployeeById($id)
    {
        return EmployeeModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $employee = EmployeeModel::find($id);
        $employee->name = $inputs['name'];
        $employee->save();
    }

    public function destroy($id)
    {
        return EmployeeModel::destroy($id);
    }
}