<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\LeaveEntitlementStoreRequest;
use App\Models\LeaveEntitlement;
use App\Service\LeaveEntitlement as LeaveEntitlementService;
use App\Service\Employee as EmployeeService;
use App\Service\LeaveType as LeaveTypeService;
use App\Service\LeavePeriod as LeavePeriodService;

use Illuminate\Http\Request;

use App\Http\Requests;

class LeaveEntitlementController extends Controller {

	use DataMessage;

    protected $leaveentitlementService;
    protected $baseUrl = 'leaveentitlement';

    /**
     * SiteController constructor.
     * @param $leaveentitlementService
     */
    public function __construct(LeaveEntitlementService $leaveentitlementService, EmployeeService $employeeService,
                    LeaveTypeService $leavetypeService, LeavePeriodService $leaveperiodService)
    {
        $this->leaveentitlementService = $leaveentitlementService;
        $this->employeeService = $employeeService;
        $this->leavetypeService = $leavetypeService; 
        $this->leaveperiodService = $leaveperiodService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('leaveentitlement.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->leaveentitlementService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['employee'] = $this->employeeService->employeeList('employee');
        $data['leavetype'] = $this->leavetypeService->leavetypeList('leave_type');
        $data['leaveperiod'] = $this->leaveperiodService->leaveperiodList('leave_period');
        $data['num_of_days'] = '';
        $data['note'] = '';

        return view('leaveentitlement.add',$data);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeaveEntitlementStoreRequest $request)
    {
        $this->leaveentitlementService->createLeaveentitlement($request->except(['_token']));

        return redirect('leaveentitlement')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leaveentitlements = $this->leaveentitlementService->getLeaveentitlementById($id);        
        $current_period = $this->leaveperiodService->getCurrentLeavePeriod();
        $act = 'view'; 
        if ($leaveentitlements->leave_period_id == $current_period->id){
            $act = 'edit';
        }

        $data['employee'] = $this->employeeService->getEmployeeById($leaveentitlements->employee_id);
        $data['leavetype'] = $this->leavetypeService->leavetypeList('leave_type',$leaveentitlements->leave_type_id);
        $data['leaveperiod'] = $this->leaveperiodService->leaveperiodSelect('leave_period',$leaveentitlements->leave_period_id); 
        $data['edit'] = $act;         
        $data['leaveentitlement'] = $leaveentitlements; 
        $data['num_of_days'] = $leaveentitlements->balance; 
        $data['note'] = $leaveentitlements->note;      
        //leaveentitlement
        return view('leaveentitlement.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeaveEntitlementStoreRequest $request, $id)
    {
        $this->leaveentitlementService->update($id, $request->except(['_token']));

        return redirect('leaveentitlement')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->leaveentitlementService->destroy($id);

        return redirect('leaveentitlement')->with($this->getMessage('delete'));
    }

}











