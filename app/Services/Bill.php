<?php

namespace App\Service;

use App\Models\AssetBill;
use Carbon\Carbon;

class Bill
{
    use DatatableParameters;

    protected $baseUrl = '';

    public function datatableData(array $request)
    {
        $assetId = $request['assetId'];
        $group = $request['group'];
        $this->baseUrl = 'bill/' . $group . '/' .$assetId;
        $bills = $this->getBills($assetId);
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($bills))
            ->addActions($actions)
            ->addColumn('bill_date', function($bill) {
                return Carbon::createFromFormat('Y-m-d', $bill->bill_date)->format('j-F-Y');
            })
            ->generate();
    }

    private function getBills($assetId)
    {
        return AssetBill::where('asset_id', $assetId)->get();
    }

    public function store($assetId, array $inputs)
    {
        $bill = AssetBill::create([
            'bill_date' => Carbon::createFromFormat('m/d/Y', $inputs['date'])->format('Y-m-d'),
            'asset_id' => $assetId,
            'tariff_code' => $inputs['tariff_code'],
            'water_usage' => $inputs['water_usage'],
            'bill_amount' => $inputs['bill_amount']
        ]);

        return $bill;
    }

    public function getBillById($id)
    {
        return AssetBill::find($id);
    }

    public function update($assetId, $id, array $inputs)
    {
        $maintenance = $this->getBillById($id);
        $maintenance->bill_date = Carbon::createFromFormat('m/d/Y', $inputs['date'])->format('Y-m-d');
        $maintenance->asset_id = $assetId;
        $maintenance->tariff_code = $inputs['tariff_code'];
        $maintenance->water_usage = $inputs['water_usage'];
        $maintenance->bill_amount = $inputs['bill_amount'];
        $maintenance->save();

    }

    public function destroy($id)
    {
        return AssetBill::destroy($id);
    }
}