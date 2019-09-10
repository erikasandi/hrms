<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\PositionStoreRequest;
use App\Models\Position;
use App\Service\Division as DivisionService;
use App\Service\Position as PositionService;
use Illuminate\Http\Request;

use App\Http\Requests;

class PositionController extends Controller {

	use DataMessage;

    protected $positionService;
    protected $baseUrl = 'position';

    /**
     * SiteController constructor.
     * @param $positionService
     */
    public function __construct(PositionService $positionService, DivisionService $divisionService)
    {
        $this->positionService = $positionService;
        $this->divisionService = $divisionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('position.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->positionService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['divisonlist'] = $this->divisionService->divisionSelect('division_id');
        return view('position.add',$data);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PositionStoreRequest $request)
    {
        $this->positionService->createPosition($request->except(['_token']));

        return redirect('position')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $position = $this->positionService->getPositionById($id);
        $data['position'] = $position;
        $data['divisionlist'] = $this->divisionService->divisionSelect('division_id',$position->division_id);
        return view('position.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PositionStoreRequest $request, $id)
    {
        $this->positionService->update($id, $request->except(['_token']));

        return redirect('position')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->positionService->destroy($id);

        return redirect('position')->with($this->getMessage('delete'));
    }

}











