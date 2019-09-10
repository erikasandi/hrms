<?php
namespace App\Http\Controllers;

use App\Service\EducationGrade;
use App\Service\EmployeeEducationHistory;
use App\Http\Controllers\Controller;

class EducationHistoryController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add($empId)
    {
        $data['emp_id'] = $empId;
        $data['place'] = '';
        $data['score'] = '';
        $data['started_at'] = '';
        $data['ended_at'] = '';
        $data['description'] = '';

        $records = EducationGrade::all(['id', 'name']);
        $grades = [];
        foreach ($records as $record) {
            $grades[$record->id] = $record->name;
        }
        $data['cbGrade'] = \Form::select('grade', $grades, '', ['id' => 'grade', 'class' => 'form-control chosen', 'autofocus' => 'autofocus', 'data-placeholder' => 'Select Grade']);

        $data['panelTitle'] = 'Education History Form';
        $data['act'] = 'add';
        return view('hr.employee.education-history.add', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $record = EmployeeEducationHistory::find($id);
        $data['place'] = $record->place;
        $data['score'] = $record->score;
        $data['started_at'] = $record->started_at;
        $data['ended_at'] = $record->ended_at;
        $data['description'] = $record->description;
        $data['emp_id'] = $record->employee_id;

        $records = EducationGrade::all(['id', 'name']);
        $grades = [];
        foreach ($records as $record) {
            $grades[$record->id] = $record->name;
        }
        $data['cbGrade'] = \Form::select('grade', $grades, $record->education_grade_id, ['id' => 'grade', 'class' => 'form-control chosen', 'autofocus' => 'autofocus', 'data-placeholder' => 'Select Grade']);

        $data['panelTitle'] = 'Education History Form';
        $data['act'] = 'edit';
        $data['id'] = $id;
        return view('hr.employee.education-history.add', $data);
    }

    /**
     * Save data in storage.
     */
    public function save()
    {
        $act = \Request::input('act');
        $grade = \Request::input('grade');
        $place = \Request::input('place');
        $score = \Request::input('score');
        $started_at = \Request::input('started_at');
        $ended_at = \Request::input('ended_at');
        $description = \Request::input('description');
        $empId = \Request::input('emp_id');

        if ($act == 'edit') {
            $id = \Request::input('id');
            $new = EmployeeEducationHistory::find($id);
        } else {
            $new = new EmployeeEducationHistory;
        }

        $new->employee_id = $empId;
        $new->education_grade_id = $grade;
        $new->place = $place;
        $new->score = $score;
        $new->started_at = $started_at;
        $new->ended_at = $ended_at;
        $new->description = $description;

        // double check the data, even we use js validation on the form
        if ($new->validate()) {
            $new->save();
            return redirect('hr/employee/detail/2/' . $empId);
        } else {
            if ($act == 'add') {
                return redirect('hr/employee/education-history/add/' . $empId);
            }
            return redirect('hr/employee/education-history/edit/' . $id);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {
        $empId = EmployeeEducationHistory::find($id)->employee_id;
        EmployeeEducationHistory::destroy($id);
        return redirect('hr/employee/detail/2/' . $empId);
    }

}
