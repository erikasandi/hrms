<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\WorkScheduleStoreRequest;
use App\Models\WorkSchedule;
use App\Service\WorkSchedule as WorkScheduleService;
use Illuminate\Http\Request;

use App\Http\Requests;

class WorkScheduleController extends Controller {

	use DataMessage;

    protected $workscheduleService;
    protected $baseUrl = 'workschedule';

    /**
     * SiteController constructor.
     * @param $divisionService
     */
    public function __construct(WorkScheduleService $workscheduleService)
    {
        $this->workscheduleService = $workscheduleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('workschedule.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->workscheduleService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workschedule.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkScheduleStoreRequest $request)
    {
        $this->workscheduleService->createWorkSchedule($request->except(['_token']));

        return redirect('workschedule')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['schedule'] = $this->workscheduleService->getWorkScheduleById($id);
        return view('workschedule.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkScheduleStoreRequest $request, $id)
    {
        $this->workscheduleService->update($id, $request->except(['_token']));

        return redirect('workschedule')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->workscheduleService->destroy($id);

        return redirect('workschedule')->with($this->getMessage('delete'));
    }

}











