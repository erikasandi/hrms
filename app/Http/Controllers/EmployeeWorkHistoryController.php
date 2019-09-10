<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Service\EmployeeWorkHistory as WorkHistoryService;
use App\Http\Requests\EmployeeWorkHistoryStoreRequest;
use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use Illuminate\Http\Request;

class EmployeeWorkHistoryController extends Controller
{
    use DataMessage;

    protected $workhistoryService;

    public function __construct(WorkHistoryService $workhistoryService)
    {
        $this->workhistoryService = $workhistoryService;
    }   
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function anyData(Request $request)
    {
        return $this->workhistoryService->datatableData($request->only(['employee_id']));
    }

    public function create($empId)
    {
        $data['employee_id'] = $empId;
        $data['company'] = '';
        $data['position'] = '';
        $data['started_at'] = '';
        $data['ended_at'] = '';
        $data['description'] = '';

        $data['panelTitle'] = 'Work History Form';
        $data['id'] = '';
        $data['act'] = 'add';
        $data['save'] = url('hr/employee/workhistory/save');
        return view('hr.employee.work-history.add', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($Id)
    {
        $employeeWorkHistory = $this->workhistoryService->getWorkHistoryById($Id);

        $data['employee_id'] = $employeeWorkHistory->employee_id;
        $data['company'] = $employeeWorkHistory->company;
        $data['position'] = $employeeWorkHistory->position;
        $data['started_at'] = $employeeWorkHistory->started_at;
        $data['ended_at'] = $employeeWorkHistory->ended_at;
        $data['description'] = $employeeWorkHistory->description;

        $data['panelTitle'] = 'Work History Form';
        $data['id'] = $Id;
        $data['act'] = 'edit';
        $data['save'] = url('/hr/employee/workhistory/'.$Id.'/update');
        return view('hr.employee.work-history.add', $data); 
    }

    /**
     * Save data in storage.
     */
    public function store(EmployeeWorkHistoryStoreRequest $request)
    {
        $this->workhistoryService->createWorkHistory($request->except(['_token']));        

        return redirect('hr/employee/'.$request->employee_id.'/detail#work-history')->with($this->getMessage('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeWorkHistoryStoreRequest $request, $id)
    {
        $this->workhistoryService->update($id, $request->except(['_token']));

        return redirect('hr/employee/'.$request->employee_id.'/detail#work-history')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->workhistoryService->getWorkHistoryById($id);
        $empId = $data->employee_id;
        $this->workhistoryService->destroy($id);

        return redirect('hr/employee/'.$empId.'/detail#work-history')->with($this->getMessage('delete'));
    }
}
