<?php

namespace App\Http\Controllers;

use App\Service\AssetPerformance;
use App\Service\DataMessage;
use Illuminate\Http\Request;

use App\Http\Requests;

class AssetPerformanceController extends Controller
{
    use DataMessage;

    protected $performanceService;

    /**
     * AssetPerformanceController constructor.
     * @param $performanceService
     */
    public function __construct(AssetPerformance $performanceService)
    {
        $this->performanceService = $performanceService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('assets.performances.list');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->performanceService->datatableData();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assets.performances.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->performanceService->store($request->except(['_token']));

        return redirect('asset-performance')->with($this->getMessage('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['performance'] = $this->performanceService->getPerformanceById($id);

        return view('assets.performances.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->performanceService->update($id, $request->except(['_token']));

        return redirect('asset-performance')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->performanceService->destroy($id);

        return redirect('asset-performance')->with($this->getMessage('delete'));
    }
}
