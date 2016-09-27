<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetConditionStore;
use App\Service\AssetCondition;
use App\Service\DataMessage;
use Illuminate\Http\Request;

use App\Http\Requests;

class AssetConditionController extends Controller
{
    use DataMessage;

    protected $conditionService;

    /**
     * AssetConditionController constructor.
     * @param $conditionService
     */
    public function __construct(AssetCondition $conditionService)
    {
        $this->conditionService = $conditionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('assets.conditions.list');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->conditionService->datatableData();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assets.conditions.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AssetConditionStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetConditionStore $request)
    {
        $this->conditionService->store($request->except(['_token']));

        return redirect('asset-condition')->with($this->getMessage('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['condition'] = $this->conditionService->getConditionById($id);

        return view('assets.conditions.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AssetConditionStore $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssetConditionStore $request, $id)
    {
        $this->conditionService->update($id, $request->except(['_token']));

        return redirect('asset-condition')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->conditionService->destroy($id);

        return redirect('asset-condition')->with($this->getMessage('delete'));
    }
}
