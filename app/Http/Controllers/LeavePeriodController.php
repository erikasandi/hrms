<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\LeavePeriodStoreRequest;
use App\Models\LeavePeriod;
use App\Service\LeavePeriod as LeaveperiodService;
use Illuminate\Http\Request;

use App\Http\Requests;

class LeavePeriodController extends Controller {

	use DataMessage;

    protected $leaveperiodService;
    protected $baseUrl = 'leaveperiod';

    /**
     * SiteController constructor.
     * @param $leavetypeService
     */
    public function __construct(LeaveperiodService $leaveperiodService)
    {
        $this->leaveperiodService = $leaveperiodService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('leaveperiod.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->leaveperiodService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leaveperiod.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeavePeriodStoreRequest $request)
    {
        $this->leaveperiodService->createLeaveperiod($request->except(['_token']));

        return redirect('leaveperiod')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['leaveperiod'] = $this->leaveperiodService->getLeaveperiodById($id);
        return view('leaveperiod.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeavePeriodStoreRequest $request, $id)
    {
        $this->leaveperiodService->update($id, $request->except(['_token']));

        return redirect('leaveperiod')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->leaveperiodService->destroy($id);

        return redirect('leaveperiod')->with($this->getMessage('delete'));
    }

}











