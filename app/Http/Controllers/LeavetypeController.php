<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\LeaveTypeStoreRequest;
use App\Models\LeaveType;
use App\Service\LeaveType as LeavetypeService;
use Illuminate\Http\Request;

use App\Http\Requests;

class LeavetypeController extends Controller {

	use DataMessage;

    protected $leavetypeService;
    protected $baseUrl = 'leavetype';

    /**
     * SiteController constructor.
     * @param $leavetypeService
     */
    public function __construct(LeavetypeService $leavetypeService)
    {
        $this->leavetypeService = $leavetypeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('leavetype.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->leavetypeService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leavetype.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeaveTypeStoreRequest $request)
    {
        $this->leavetypeService->createLeavetype($request->except(['_token']));

        return redirect('leavetype')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['leavetype'] = $this->leavetypeService->getLeavetypeById($id);
        return view('leavetype.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeaveTypeStoreRequest $request, $id)
    {
        $this->leavetypeService->update($id, $request->except(['_token']));

        return redirect('leavetype')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->leavetypeService->destroy($id);

        return redirect('leavetype')->with($this->getMessage('delete'));
    }

    public function getLeaveQuota()
    {
        $typeId = \Request::input('type');
        $leaveType = $this->leavetypeService->getLeavetypeById($typeId);
        return $leaveType->quota;;
        /*
        $leaveType = LeaveType::find($typeId);
        return $leaveType->quota;
        */
    }

}











