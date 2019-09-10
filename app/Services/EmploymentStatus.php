<?php

namespace App\Service;

use App\Models\EmploymentStatus as EmploymentStatusModel;

class EmploymentStatus
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'empstatus';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function datatableData()
    {
        $empstatuses = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($empstatuses))
            ->addActions($actions)
            ->generate();
    }

    public function employmentstatusList($name, $withBlank = false)
    {
        $status = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];
        return $this->form->dbSelect($status, $name, $fields, ['class' => 'form-control', 'id' => 'employee']);
    }

    public function employmentstatusSelect($name, $defaultValue = null, $withBlank)
    {
        $status = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }

        return $this->form->dbSelect($status, $name, $fields, ['class' => 'form-control', 'id' => 'status']);
    }

    public function all()
    {
        return EmploymentStatusModel::all();
    }

    public function createEmploymentStatus(array $inputs)
    {
        return EmploymentStatusModel::create($inputs);
    }

    public function getEmploymentStatusById($id)
    {
        return EmploymentStatusModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $position = EmploymentStatusModel::find($id);
        $position->name = $inputs['name'];
        $position->description = $inputs['description'];
        $position->save();
    }

    public function destroy($id)
    {
        return EmploymentStatusModel::destroy($id);
    }
}