<?php

namespace App\Service;

use App\Models\EmployeeMaritalStatus as EmployeeMaritalStatusModel;
use App\Models\MaritalStatus as MaritalStatusModel;

class EmployeeMaritalStatus
{
    //use DatatableParameters;

    protected $form;
    //protected $baseUrl = 'hr/employee';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    //public function employeemaritalstatusSelect($name, $code,$defaultValue = null)
    public function employeemaritalstatusSelect($name, $selectedValue, $withBlank = false)
    {
        $recs = $this->status($selectedValue);
        $defaultValue = $recs->marital_status_id;
        $empmarital = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'firstname',
            'withBlank' => $withBlank
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $this->form->dbSelect($empmarital, $name, $fields, ['class' => 'form-control', 'id' => 'marital_status']);
    }

    public function employeemaritalstatusList($name)
    {
        $empmarital = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'firstname'
        ];
        return $this->form->dbSelect($empmarital, $name, $fields, ['class' => 'form-control', 'id' => 'marital_status']);
    }

    public function all()
    {
        return EmployeeMaritalStatusModel::all();
    }

    public function status($id)
    {
        return EmployeeMaritalStatusModel::where('status',1)
                ->where('id',$id)
                ->get();
    }

    public function createEmployeeMaritalStatus(array $inputs)
    {
        return EmployeeMaritalStatusModel::create($inputs);
    }

    public function getEmployeeMaritalStatusById($id)
    {
        return EmployeeMaritalStatusModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $employee = EmployeeMaritalStatusModel::find($id);
        $employee->name = $inputs['name'];
        $employee->save();
    }

    public function destroy($id)
    {
        return EmployeeMaritalStatusModel::destroy($id);
    }
}