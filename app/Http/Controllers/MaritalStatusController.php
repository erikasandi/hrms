<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\MaritalStatusStoreRequest;
use App\Models\MaritalStatus;
use App\Service\MaritalStatus as MaritalStatusService;
use Illuminate\Http\Request;

use App\Http\Requests;

class MaritalStatusController extends Controller {

	use DataMessage;

    protected $maritalstatusService;
    protected $baseUrl = 'marital';

    /**
     * SiteController constructor.
     * @param $maritalstatusService
     */
    public function __construct(MaritalStatusService $maritalstatusService)
    {
        $this->maritalstatusService = $maritalstatusService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('marital-status.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->maritalstatusService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marital-status.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaritalStatusStoreRequest $request)
    {
        $this->maritalstatusService->createMaritalStatus($request->except(['_token']));

        return redirect('marital')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['marital'] = $this->maritalstatusService->getMaritalById($id);
        return view('marital-status.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(MaritalStatusStoreRequest $request, $id)
    {
        $this->maritalstatusService->update($id, $request->except(['_token']));

        return redirect('marital')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->maritalstatusService->destroy($id);

        return redirect('marital')->with($this->getMessage('delete'));
    }

}











