<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetTypeStore;
use App\Service\AssetType;
use App\Service\DataMessage;
use Illuminate\Http\Request;

use App\Http\Requests;

class AssetTypeController extends Controller
{
    use DataMessage;

    protected $assetTypeService;

    /**
     * AssetTypeController constructor.
     * @param AssetType $assetTypeService
     */
    public function __construct(AssetType $assetTypeService)
    {
        $this->assetTypeService = $assetTypeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('assets.types.list');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->assetTypeService->datatableData();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assets.types.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AssetTypeStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetTypeStore $request)
    {
        $this->assetTypeService->store($request->except(['_token']));

        return redirect('asset-type')->with($this->getMessage('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assetType = $this->assetTypeService->getAssetTypeById($id);
        if (! $assetType) {
            return redirect('/asset-type')->withErrors($this->getMessage('siteNotFound'));
        }

        $data['assetType'] = $assetType;
        return view('assets.types.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AssetTypeStore $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssetTypeStore $request, $id)
    {
        $this->assetTypeService->update($id, $request->except(['_token']));

        return redirect('asset-type')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = $this->assetTypeService->destroy($id);
        if ($destroy) {
            return redirect('asset-type')->with($this->getMessage('delete'));
        }

        return redirect('/asset-type')->withErrors($this->getMessage('siteNotFound'));
    }
}
