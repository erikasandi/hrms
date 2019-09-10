<?php

namespace App\Service;

use App\Models\EmployeeAddress as EmployeeAddressModel;

class EmployeeAddress
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

    //public function positionSelect($name, $withBlank = false, $selectedValue = '')
    public function employeeaddressSelect($name, $defaultValue = null)
    {
        $empaddr = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'firstname',
            //'selected' => $selectedValue,
            //'withBlank' => $withBlank
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $this->form->dbSelect($empaddr, $name, $fields, ['class' => 'form-control', 'id' => 'empaddr']);
    }

    public function employeeaddressList($name)
    {
        $empaddr = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'firstname'
        ];
        return $this->form->dbSelect($empaddr, $name, $fields, ['class' => 'form-control', 'id' => 'empaddr']);
    }

    public function all()
    {
        return EmployeeAddressModel::all();
    }

    public function status()
    {
        return EmployeeAddressModel::where('status','!=',0)->get();
    }

    public function createEmployeeAddress(array $inputs)
    {
        return EmployeeAddressModel::create($inputs);
    }

    public function getEmployeeAddressById($id)
    {
        return EmployeeAddressModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $employee = EmployeeAddressModel::find($id);
        $employee->name = $inputs['name'];
        $employee->save();
    }

    public function destroy($id)
    {
        return EmployeeAddressModel::destroy($id);
    }
}