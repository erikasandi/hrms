<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\EmploymentStatusStoreRequest;
use App\Models\EmploymentStatus;
use App\Service\EmploymentStatus as EmploymentStatusService;
use Illuminate\Http\Request;

use App\Http\Requests;

class EmploymentStatusController extends Controller {

	use DataMessage;

    protected $employmentstatusService;
    protected $baseUrl = 'empstatus';

    /**
     * SiteController constructor.
     * @param $divisionService
     */
    public function __construct(EmploymentStatusService $employmentstatusService)
    {
        $this->employmentstatusService = $employmentstatusService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee-status.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->employmentstatusService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee-status.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmploymentStatusStoreRequest $request)
    {
        $this->employmentstatusService->createEmploymentStatus($request->except(['_token']));

        return redirect('empstatus')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['empstatus'] = $this->employmentstatusService->getEmploymentStatusById($id);
        return view('employee-status.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmploymentStatusStoreRequest $request, $id)
    {
        $this->employmentstatusService->update($id, $request->except(['_token']));

        return redirect('empstatus')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->employmentstatusService->destroy($id);

        return redirect('empstatus')->with($this->getMessage('delete'));
    }

}











