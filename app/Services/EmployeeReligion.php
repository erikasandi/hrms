<?php

namespace App\Service;

use App\Models\EmployeeReligion as EmployeeReligionModel;

class EmployeeReligion
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

    public function createEmployeeReligion(array $inputs)
    {
        return EmployeeReligionModel::create($inputs);
    }

    public function update($id, array $inputs)
    {
        $employee = EmployeeReligionModel::find($id);
        $employee->name = $inputs['name'];
        $employee->save();
    }

    public function destroy($id)
    {
        return EmployeeReligionModel::destroy($id);
    }
}