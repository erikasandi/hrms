<?php

namespace App\Service;


use App\Models\AssetPerformance as AssetPerformanceModel;

class AssetPerformance
{
    use DatatableParameters;

    protected $baseUrl = 'asset-performance';

    public function getPerformanceById($id)
    {
        $siteId = session('gSite');
        $query = AssetPerformanceModel::where('id', '=', $id);
        $query = ( $siteId != '0' ) ? $query->where('site_id', $siteId) : $query ;

        return $query->get()->first();
    }

    public function store(array $inputs)
    {
        return AssetPerformanceModel::create($inputs);
    }

    public function update($id, array $inputs)
    {
        $performance = AssetPerformanceModel::find($id);
        $performance->name = $inputs['name'];
        $performance->description = $inputs['description'];
        $performance->save();
    }

    public function destroy($id)
    {
        return AssetPerformanceModel::destroy($id);
    }

    public function datatableData()
    {
        $users = $this->getPerformances();
        $actions = $this->actionParameters(['edit','delete']);

        return (new DatatableGenerator($users))
            ->addActions($actions)
            ->generate();
    }

    public function assetPerformanceSelect($name, $defaultValue = null)
    {
        $form = new FormGenerator();
        $assetTypes = $this->getPerformances();
        $fields = [
            'id' => 'id',
            'value' => 'name'
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($assetTypes, $name, $fields, ['class' => 'form-control', 'id' => 'asset-performance']);
    }

    private function getPerformances()
    {
        $siteId = session('gSite');
        $query = AssetPerformanceModel::where('id', '<>', 0);
        $query = ( $siteId != '0' ) ? $query->where('site_id', $siteId) : $query ;

        return $query->get();
    }
}