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

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    private function getAssetTypes()
    {
        return AssetTypeModel::all();
    }

    public function store(array $inputs)
    {
        return AssetTypeModel::create($inputs);
    }

    public function getAssetTypeById($id)
    {
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
        return AssetTypeModel::destroy($id);
    }
}