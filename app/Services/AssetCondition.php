<?php

namespace App\Service;

use App\Models\AssetCondition as AssetConditionModel;

class AssetCondition
{
    use DatatableParameters;

    protected $baseUrl = 'asset-condition';

    public function getConditions()
    {
        return AssetConditionModel::all();
    }

    public function getConditionById($id)
    {
        return AssetConditionModel::find($id);
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
}