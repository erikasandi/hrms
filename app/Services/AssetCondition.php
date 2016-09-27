<?php

namespace App\Service;

use App\Models\AssetCondition as AssetConditionModel;

class AssetCondition
{
    use DatatableParameters;

    protected $baseUrl = 'asset-condition';

    public function getConditionById($id)
    {
        $siteId = session('gSite');
        $query = AssetConditionModel::where('id', '=', $id);
        $query = ( $siteId != '0' ) ? $query->where('site_id', $siteId) : $query ;

        return $query->get()->first();
        //return AssetConditionModel::find($id);
    }

    public function store(array $inputs)
    {
        return AssetConditionModel::create($inputs);
    }

    public function update($id, array $inputs)
    {
        $condition = AssetConditionModel::find($id);
        $condition->name = $inputs['name'];
        $condition->description = $inputs['description'];
        $condition->save();
    }

    public function destroy($id)
    {
        return AssetConditionModel::destroy($id);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function datatableData()
    {
        $users = $this->getConditions();
        $actions = $this->actionParameters(['edit','delete']);

        return (new DatatableGenerator($users))
            ->addActions($actions)
            ->generate();
    }

    public function assetConditionSelect($name, $defaultValue = null)
    {
        $form = new FormGenerator();
        $assetTypes = $this->getConditions();
        $fields = [
            'id' => 'id',
            'value' => 'name'
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($assetTypes, $name, $fields, ['class' => 'form-control', 'id' => 'asset-condition']);
    }

    private function getConditions()
    {
        $siteId = session('gSite');

        $query = AssetConditionModel::where('id', '<>', 0);
        $query = ( $siteId != '0' ) ? $query->where('site_id', $siteId) : $query ;

        return $query->get();
        // return AssetConditionModel::all();
    }
}