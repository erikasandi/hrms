<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\DivisionStoreRequest;
use App\Models\Division;
use App\Service\Division as DivisionService;
use Illuminate\Http\Request;

use App\Http\Requests;

class DivisionController extends Controller {

	use DataMessage;

    protected $divisionService;
    protected $baseUrl = 'division';

    /**
     * SiteController constructor.
     * @param $divisionService
     */
    public function __construct(DivisionService $divisionService)
    {
        $this->divisionService = $divisionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('division.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->divisionService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('division.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DivisionStoreRequest $request)
    {
        $this->divisionService->createDivision($request->except(['_token']));

        return redirect('division')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['division'] = $this->divisionService->getDivisionById($id);
        return view('division.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DivisionStoreRequest $request, $id)
    {
        $this->divisionService->update($id, $request->except(['_token']));

        return redirect('division')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->divisionService->destroy($id);

        return redirect('division')->with($this->getMessage('delete'));
    }

}











