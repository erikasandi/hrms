<?php

namespace App\Service;

use App\Models\AssetType as AssetTypeModel;

class AssetType
{
    use DatatableParameters;

    protected $baseUrl = 'asset-type';

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function datatableData()
    {
        $assetTypes = $this->getAssetTypes();
        $actions = $this->actionParameters(['edit','delete']);

        return (new DatatableGenerator($assetTypes))
            ->addActions($actions)
            ->generate();
    }

    public function store(array $inputs)
    {
        return AssetTypeModel::create($inputs);
    }

    public function getAssetTypeById($id)
    {
        if (! $this->checkIfDataExistsOnThisSite($id)) {
            return false;
        }

        return AssetTypeModel::find($id);
    }

    public function update($id, array $inputs)
    {
        $assetType = AssetTypeModel::find($id);
        $assetType->name = $inputs['name'];
        $assetType->description = $inputs['description'];
        $assetType->save();
    }

    public function destroy($id)
    {
        if ($this->checkIfDataExistsOnThisSite($id)) {
            return AssetTypeModel::destroy($id);
        }

        return false;
    }

    public function assetTypeSelect($name, $selected = '', $withBlank = true, $options = '')
    {
        $form = new FormGenerator();
        $assetTypes = $this->getAssetTypes();
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank,
            'selected' => $selected
        ];
        $options = $options != '' ? $options : ['class' => 'form-control', 'id' => 'asset-type'];
        return $form->dbSelect($assetTypes, $name, $fields, $options);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    private function getAssetTypes()
    {
        $siteId = session('gSite');

        $query = AssetTypeModel::where('id', '<>', 0);
        $query = ( $siteId != '0' ) ? $query->where('site_id', $siteId) : $query ;

        return $query->get();
    }

    private function checkIfDataExistsOnThisSite($id)
    {
        $siteId = session('gSite');
        $query = AssetTypeModel::where('id', $id)->where('site_id', $siteId);
        if ($query->count() > 0) {
            return true;
        }
        return false;
    }
}