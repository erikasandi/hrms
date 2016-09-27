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
        $siteId = session('gSite');
        $query = AssetTypeModel::where('id', '=', $id);
        $query = ( $siteId != '0' ) ? $query->where('site_id', $siteId) : $query ;
        // return AssetTypeModel::find($id);

        return $query->get()->first();
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

    public function assetTypeSelect($name, $defaultValue = null)
    {
        $form = new FormGenerator();
        $assetTypes = $this->getAssetTypes();
        $fields = [
            'id' => 'id',
            'value' => 'name'
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($assetTypes, $name, $fields, ['class' => 'form-control', 'id' => 'asset-type']);
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
}