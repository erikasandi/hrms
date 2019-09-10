<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Service\Gender as GenderService;
use App\Service\MaritalStatus as MaritalService;
use App\Service\Religion as ReligionService;
use App\Service\Position as PositionService;
use App\Service\EmploymentStatus as EmploymentStatusService;
use App\Service\Employee as EmployeeService;
use App\Service\WorkSchedule as WorkScheduleService;
use App\Service\EmployeeAddress as EmployeeAddresService;
use App\Service\EmployeeMaritalStatus as EmployeeMaritalStatusService;
use App\Service\EmployeeReligion as EmployeeReligionService;

use App\Http\Requests as Requests;
use App\Http\Requests\EmployeeStoreRequest as EmployeeRequest; 
use App\Http\Requests\EmployeeAddressStoreRequest as EmployeeAddressRequest;
use App\Http\Requests\EmployeeEmploymentStatusStoreRequest as EmployeeEmploymentStatusRequest;
use App\Http\Requests\EmployeeMaritalStatusStoreRequest as EmployeeMaritalStatusRequest;
use App\Http\Requests\EmployeePositionStoreRequest as EmployeePositionRequset;
use App\Http\Requests\EmployeeReligionStoreRequest as EmployeeReligionRequest;
use App\Http\Requests\EmployeeSuperiorStoreRequest as EmployeeSuperiorRequest;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    use DataMessage;

    protected $genderService;
    protected $maritalService;
    protected $religionService;
    protected $positionService;
    protected $employmentstatusService;
    protected $employeeService;
    protected $workscheduleService;
    protected $employeeaddressService;
    protected $employeemaritalstatusService;
    protected $employeereligionService;

    protected $baseUrl = 'hr/employee';

    /**
     * SiteController constructor.
     * @param $positionService
     */
    public function __construct(GenderService $genderService, MaritalService $maritalService, ReligionService $religionService, PositionService $positionService, EmploymentStatusService $employmentstatusService, EmployeeService $employeeService, WorkScheduleService $workscheduleService, EmployeeAddresService $employeeaddressService, EmployeeMaritalStatusService $employeemaritalstatusService, EmployeeReligionService $employeereligionService)
    {
        $this->genderService = $genderService;
        $this->maritalService = $maritalService;
        $this->religionService = $religionService;
        $this->positionService = $positionService;
        $this->employmentstatusService = $employmentstatusService;
        $this->employeeService = $employeeService;
        $this->workscheduleService = $workscheduleService;
        $this->employeeaddressService = $employeeaddressService;
        $this->employeemaritalstatusService = $employeemaritalstatusService;
        $this->employeereligionService = $employeereligionService;
    }   
    public $siteId;
    //$siteId = session('gSite');
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data['from'] = 0;
        return view('hr.employee.list');
    }

    public function anyData()
    {
        return $this->employeeService->datatableData();
    }
    
    public function edit($id)
    {
        $emp = $this->employeeService->getEmployeeById($id);

        //$emp = Employee::find($id);
        $data['employee_id'] = $emp->employee_id;
        $data['firstname'] = $emp->firstname;
        $data['lastname'] = $emp->lastname;
        $data['place_of_birth'] = $emp->place_of_birth;
        $data['date_of_birth'] = $emp->date_of_birth;
        $data['phone'] = $emp->phone;
        $data['phone_other'] = $emp->phone_other;
        $data['email'] = $emp->email;
        $data['email_other'] = $emp->emp_other;
        $data['npwp_number'] = $emp->npwp_number;
        $data['jamsostek_number'] = $emp->jamsostek_number;
        $data['join_date'] = $emp->join_date;

        $data['address'] = $emp->employeeAddress->address;
        $data['province'] = $emp->employeeAddress->province;
        $data['city'] = $emp->employeeAddress->city;
        $data['zipcode'] = $emp->employeeAddress->zipcode;

        // gender      
        $data['cbSex'] = $this->genderService->genderSelect('gender_id', $emp->gender_id, true);
        // marital status
        $data['cbMarital'] = $this->maritalService->maritalSelect('marital_status_id',
                    $emp->employeemaritalStatus->marital_status_id, true);
        // religion
        $data['cbReligion'] = $this->religionService->religionSelect('religion_id',
                    $emp->employeeReligion->religion_id, true);
        
        // position        
        $data['cbPosition'] = $this->positionService->positionSelect('position_id',
                    $emp->employeePosition->position_id, true);

        // work schedule
        $data['cbSchedule'] = $this->workscheduleService->workscheduleSelect('work_schedule_id',
                    $emp->work_schedule_id, true);
        
        // superior
        $data['cbSuperior'] = $this->employeeService->employeeSelect('superior_id',
                    $emp->employeeSuperior->employee_id, true);
        
        // employee status
        $data['cbEmploymentStatus'] = $this->employmentstatusService->employmentstatusSelect('employment_status_id',
                    $emp->employeeEmploymentStatus->employment_status_id, true);
        
        // approval
        $leaveApprovals[0] = 'No';
        $leaveApprovals[1] = 'Yes';
        $data['cbLeaveApproval'] = \Form::select('leave_need_approval', $leaveApprovals, 1, ['id' => 'leave_need_approval', 'class' => 'form-control chosen', 'data-placeholder' => 'Select Approval']);
       
        $data['panelTitle'] = 'Edit Employee Form';
        $data['act'] = 'edit';
        $data['id'] = $id;
        return view('hr.employee.edit', $data);
    }
        
    public function detail($id)
    //public function detail($from, $id)
    {
        
        $emp = $this->employeeService->getEmployeeById($id);

        $data['from'] = 0;
        $data['emp'] = $emp;
        $data['profile'] = false;
        $data['panelTitle'] = 'Employee Detail';

        return view('hr.employee.detail', $data);
    }

    public function update(EmployeeRequest $request, $id)
    {
        $this->employeeService->update($id, $request->except(['_token']));

        return redirect('hr/employee/'.$request->employee_id.'/detail#education-history')->with($this->getMessage('update'));
    }

    public function recruitment()
    {
        //protected $baseUrl = 'hr/recruitment';

        $leaveApprovals[0] = 'No';
        $leaveApprovals[1] = 'Yes';
        $data['cbLeaveApproval'] = \Form::select('leave_need_approval', $leaveApprovals, 1, ['id' => 'leave_need_approval', 'class' => 'form-control chosen', 'data-placeholder' => 'Select Gender']);
        
        $data['gender'] = $this->genderService->genderList('gender_id');
        $data['marital'] = $this->maritalService->maritalList('marital_status_id');
        $data['religion'] = $this->religionService->religionList('religion_id');
        $data['position'] = $this->positionService->positionList('position_id');
        $data['status'] = $this->employmentstatusService->employmentstatusList('employment_status_id');
        $data['employee'] = $this->employeeService->employeeList('superior_id');
        $data['schedule'] = $this->workscheduleService->workscheduleList('work_schedule_id');
        
        $data['act'] = 'recruitment';
        $data['panelTitle'] = 'Recruitment Form';
        return view('hr.recruitment.recruitment', $data);
    }

    /**
     * Save data in storage.
     */
    public function storeRecruitment(Requests $request)
    {
        //$this->employeereligionService->createEmployeeReligion($request->except(['_token']));
        //return redirect('hr/employee')->with($this->getMessage('store'));
        //return view('hr.employee.list');
    }

    public function getEmployee()
    {
        /*
        $typeId = \Request::input('type');
        $leaveType = $this->leavetypeService->getLeavetypeById($typeId);
        return $leaveType->quota;;
        */
        /*
        $leaveType = LeaveType::find($typeId);
        return $leaveType->quota;
        */
    }
}
