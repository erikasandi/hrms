<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Service\EmployeeEducationHistory as EducationHistoryService;
use App\Service\EducationGrade as EducationGradeService;
use App\Http\Requests\EmployeeEducationHistoryStoreRequest;
use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use Illuminate\Http\Request;

class EmployeeEducationHistoryController extends Controller
{
    use DataMessage;

    protected $educationhistoryService;
    protected $educationgradeService;

    public function __construct(EducationHistoryService $educationhistoryService, EducationGradeService $educationgradeService )
    {
        $this->educationhistoryService = $educationhistoryService;
        $this->educationgradeService = $educationgradeService;
    }   
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    /* Request $request */
    
    public function anyData(Request $request)
    {
        return $this->educationhistoryService->datatableData($request->only(['employee_id']));
    }
    
    public function create($empId)
    {

        $data['employee_id'] = $empId;
        $data['grade'] = $this->educationgradeService->educationgradeList('education_grade_id');
        $data['place'] = '';
        $data['started_at'] = '';
        $data['ended_at'] = '';
        $data['description'] = '';
        $data['score'] = '';

        $data['panelTitle'] = 'Education History Form';
        $data['id'] = '';
        $data['act'] = 'add';
        $data['save'] = url('/hr/employee/educationhistory/save');
        return view('hr.employee.education-history.add', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($Id)
    {
        $empEducationHistory = $this->educationhistoryService->getEducationHistoryById($Id);

        $data['employee_id'] = $empEducationHistory->employee_id;
        //$data['grade'] = $empEducationHistory->education_grade_id;
        // grade      
        $data['grade'] = $this->educationgradeService->educationgradeSelect('education_grade_id', $empEducationHistory->education_grade_id, true);

        $data['place'] = $empEducationHistory->place;
        $data['started_at'] = $empEducationHistory->started_at;
        $data['ended_at'] = $empEducationHistory->ended_at;
        $data['description'] = $empEducationHistory->description;
        $data['score'] = $empEducationHistory->score;

        $data['panelTitle'] = 'Education History Form';
        $data['id'] = $Id;
        $data['act'] = 'edit';
        $data['save'] = url('/hr/employee/educationhistory/'.$Id.'/update');
        return view('hr.employee.education-history.add', $data); 
    }

    /**
     * Save data in storage.
     */
    public function store(EmployeeEducationHistoryStoreRequest $request)
    {
        $this->educationhistoryService->createEducationHistory($request->except(['_token']));        

        return redirect('hr/employee/'.$request->employee_id.'/detail#education-history')->with($this->getMessage('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeEducationHistoryStoreRequest $request, $id)
    {
        $this->educationhistoryService->update($id, $request->except(['_token']));

        return redirect('hr/employee/'.$request->employee_id.'/detail#education-history')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->educationhistoryService->getEducationHistoryById($id);
        $empId = $data->employee_id;
        $this->educationhistoryService->destroy($id);

        return redirect('hr/employee/'.$empId.'/detail#education-history')->with($this->getMessage('delete'));
    }
}
