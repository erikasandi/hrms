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

    public function index($group = '', $assetId)
    {
        return view('assets.maintenances.list');
    }

    public function anyData(Request $request)
    {
        return $this->maintenanceService->datatableData($request->only(['assetId', 'group']));
    }

    public function create($group = '', $assetId)
    {
        $data['assetId'] = $assetId;
        $data['group'] = $group;
        $data['maintenanceTypeSelect'] = $this->maintenanceService->maintenanceSelect('maintenance_type_id');

        return view('assets.maintenances.add', $data);
    }

    public function store(Request $request, $group = '', $assetId)
    {
        $this->maintenanceService->store($assetId, $request->except(['_token']));

        return redirect('asset-by-group/' . $group . '/' . $assetId . '/detail/#tab_maintenances');
    }

    public function edit($group = '', $assetId, $id)
    {
        $maintenance = $this->maintenanceService->getMaintenanceById($id);
        $data['maintenance'] = $maintenance;
        $data['maintenanceDate'] = Carbon::createFromFormat('Y-m-d', $maintenance->maintenance_date)->format('m/d/Y');
        $data['images'] = $maintenance->images;
        $data['assetId'] = $assetId;
        $data['group'] = $group;
        $data['maintenanceTypeSelect'] = $this->maintenanceService->maintenanceSelect('maintenance_type_id', $maintenance->maintenance_type_id);

        return view('assets.maintenances.edit', $data);
    }

    public function update(Request $request, $group = '', $assetId, $id)
    {
        $this->maintenanceService->update($assetId, $id, $request->except(['_token']));

        return redirect('asset-by-group/' . $group . '/' . $assetId . '/detail/#tab_maintenances');
    }

    public function destroy($group = '', $assetId, $id)
    {
        $this->maintenanceService->destroy($id);

        return redirect('asset-by-group/' . $group . '/' . $assetId . '/detail/#tab_maintenances');
    }
}
