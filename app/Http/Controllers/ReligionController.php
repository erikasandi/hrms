<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\ReligionStoreRequest;
use App\Models\Religion;
use App\Service\Religion as ReligionService;
use Illuminate\Http\Request;

use App\Http\Requests;

class ReligionController extends Controller {

	use DataMessage;

    protected $religionService;
    protected $baseUrl = 'religion';

    /**
     * SiteController constructor.
     * @param $divisionService
     */
    public function __construct(ReligionService $religionService)
    {
        $this->religionService = $religionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('religion.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->religionService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('religion.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReligionStoreRequest $request)
    {
        $this->religionService->createReligion($request->except(['_token']));

        return redirect('religion')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['religion'] = $this->religionService->getReligionById($id);
        return view('religion.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReligionStoreRequest $request, $id)
    {
        $this->religionService->update($id, $request->except(['_token']));

        return redirect('religion')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->religionService->destroy($id);

        return redirect('religion')->with($this->getMessage('delete'));
    }

}











