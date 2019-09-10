<?php

namespace App\Service;

use App\Models\WorkSchedule as WorkScheduleModel;

class WorkSchedule
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'workschedule';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function datatableData()
    {
        $schedules = $this->all();
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($schedules))
            ->addActions($actions)
            ->generate();
    }

    public function workscheduleSelect($name, $defaultValue = null, $withBlank)
    {
        $form = new FormGenerator();
        $schedules = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'title',
            'withBlank'=> $withBlank
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($schedules, $name, $fields, ['class' => 'form-control', 'id' => 'schedules']);
    }

     public function workscheduleList($name)
    {
        $form = new FormGenerator();
        $schedules = $this->all();
        $fields = [
            'id' => 'id',
            'value' => 'title'
        ];
        return $form->dbSelect($schedules, $name, $fields, ['class' => 'form-control', 'id' => 'schedules']);
    }

    public function all()
    {
        return WorkScheduleModel::all();
    }

    public function createWorkSchedule(array $inputs)
    {
        return WorkScheduleModel::create($inputs);
    }

    public function getWorkScheduleById($id)
    {
        return WorkScheduleModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $schedules = WorkScheduleModel::find($id);
        $schedules->title = $inputs['title'];
        $schedules->started_at = $inputs['started_at'];
        $schedules->ended_at = $inputs['ended_at'];
        $schedules->description = $inputs['description'];
        $schedules->save();
    }

    public function destroy($id)
    {
        return WorkScheduleModel::destroy($id);
    }
}