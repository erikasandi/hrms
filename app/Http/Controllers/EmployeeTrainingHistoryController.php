<?php
namespace App\Http\Controllers;

use App\Service\EmployeeTrainingHistory as TrainingHistoryService;
use App\Http\Controllers\Controller;
use App\Service\DataMessage;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeTrainingHistoryStoreRequest;

class EmployeeTrainingHistoryController extends Controller
{
    use DataMessage;

    protected $traininghistoryService;

     public function __construct(TrainingHistoryService $traininghistoryService)
    {
        $this->traininghistoryService = $traininghistoryService;
    }   
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function anyData(Request $request)
    {
        return $this->traininghistoryService->datatableData($request->only(['employee_id']));
    }

    public function create($empId)
    {
        $data['employee_id'] = $empId;
        $data['subject'] = '';
        $data['place'] = '';
        $data['started_at'] = '';
        $data['ended_at'] = '';
        $data['description'] = '';
        
        $data['panelTitle'] = 'Training History Form';
        $data['id'] = '';
        $data['act'] = 'add';
        $data['save'] = url('/hr/employee/traininghistory/save');
        return view('hr.employee.training-history.add', $data);
    }

    public function edit($Id)
    {
        $empTrainingHistory = $this->traininghistoryService->getTrainingHistoryById($Id);

        $data['employee_id'] = $empTrainingHistory->employee_id;
        $data['place'] = $empTrainingHistory->place;
        $data['subject'] = $empTrainingHistory->subject;
        $data['started_at'] = $empTrainingHistory->started_at;
        $data['ended_at'] = $empTrainingHistory->ended_at;
        $data['description'] = $empTrainingHistory->description;

        $data['panelTitle'] = 'Training History Form';
        $data['id'] = $Id;
        $data['act'] = 'edit';
        $data['save'] = url('/hr/employee/traininghistory/'.$Id.'/update');
        return view('hr.employee.training-history.add', $data); 
    }

    public function store(EmployeeTrainingHistoryStoreRequest $request)
    {
        $this->traininghistoryService->createTrainingHistory($request->except(['_token']));        

        return redirect('hr/employee/'.$request->employee_id.'/detail#training-history')->with($this->getMessage('store'));
    }

    public function update(EmployeeTrainingHistoryStoreRequest $request, $id)
    {
        $this->traininghistoryService->update($id, $request->except(['_token']));

        return redirect('hr/employee/'.$request->employee_id.'/detail#training-history')->with($this->getMessage('update'));
    }

    public function destroy($id)
    {
        $data = $this->traininghistoryService->getTrainingHistoryById($id);
        $empId = $data->employee_id;
        $this->traininghistoryService->destroy($id);

        return redirect('hr/employee/'.$empId.'/detail#training-history')->with($this->getMessage('delete'));
    }
}
