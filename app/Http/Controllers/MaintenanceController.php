<?php

namespace App\Http\Controllers;

use App\Service\Maintenance;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class MaintenanceController extends Controller
{
    /**
     * @var Maintenance
     */
    private $maintenanceService;

    /**
     * MaintenanceController constructor.
     * @param Maintenance $maintenanceService
     */
    public function __construct(Maintenance $maintenanceService)
    {
        $this->maintenanceService = $maintenanceService;
    }

    public function index($assetId)
    {
        return view('assets.maintenances.list');
    }

    public function anyData(Request $request)
    {
        $assetId = $request->input('assetId');
        return $this->maintenanceService->datatableData($assetId);
    }

    public function create($assetId)
    {
        $data['assetId'] = $assetId;
        $data['maintenanceTypeSelect'] = $this->maintenanceService->maintenanceSelect('maintenance_type_id');

        return view('assets.maintenances.add', $data);
    }

    public function store(Request $request, $assetId)
    {
        $this->maintenanceService->store($assetId, $request->except(['_token']));

        return redirect('asset/' . $assetId . '/detail/#tab_maintenances');
    }

    public function edit($assetId, $id)
    {
        $maintenance = $this->maintenanceService->getMaintenanceById($id);
        $data['maintenance'] = $maintenance;
        $data['maintenanceDate'] = Carbon::createFromFormat('Y-m-d', $maintenance->maintenance_date)->format('m/d/Y');
        $data['images'] = $maintenance->images;
        $data['assetId'] = $assetId;
        $data['maintenanceTypeSelect'] = $this->maintenanceService->maintenanceSelect('maintenance_type_id', $maintenance->maintenance_type_id);

        return view('assets.maintenances.edit', $data);
    }

    public function update(Request $request, $assetId, $id)
    {
        $this->maintenanceService->update($assetId, $id, $request->except(['_token']));

        return redirect('asset/' . $assetId . '/detail/#tab_maintenances');
    }

    public function destroy($assetId, $id)
    {
        $this->maintenanceService->destroy($id);

        return redirect('asset/' . $assetId . '/detail/#tab_maintenances');
    }
}
