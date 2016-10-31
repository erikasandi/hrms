<?php

namespace App\Service;


use App\Models\Maintenance as MaintenanceModel;
use App\Models\MaintenanceType;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Maintenance
{
    use DatatableParameters;

    protected $baseUrl = '';

    public function datatableData($assetId)
    {
        $this->baseUrl = 'maintenance/'.$assetId;
        $maintenances = $this->getMaintenances($assetId);
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($maintenances))
            ->addActions($actions)
            ->addColumn('date', function($maintenance) {
                return Carbon::createFromFormat('Y-m-d H:i:s', $maintenance->created_at)->format('j-F-Y');
            })
            ->addColumn('type', function($maintenance) {
                return $maintenance->maintenanceType->title;
            })
            ->generate();
    }

    public function maintenanceSelect($name, $defaultValue = null)
    {
        $form = new FormGenerator();
        $maintenanceTypes = MaintenanceType::all();
        $fields = [
            'id' => 'id',
            'value' => 'title'
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $form->dbSelect($maintenanceTypes, $name, $fields, ['class' => 'form-control', 'id' => 'maintenance-type']);
    }

    protected function getMaintenances($assetId)
    {
        return MaintenanceModel::where('asset_id', $assetId)->get();
    }

    public function store($assetId, array $inputs)
    {
        $maintenance = MaintenanceModel::create([
            'maintenance_type_id' => $inputs['maintenance_type_id'],
            'asset_id' => $assetId,
            'maintenance_date' => Carbon::createFromFormat('d/m/Y', $inputs['date'])->format('Y-m-d'),
            'performance' => $inputs['performance'],
            'description' => $inputs['description']
        ]);

        if (isset($inputs['images'])) {
            $repeaters = $inputs['images'];
            foreach ($repeaters as $repeater) {
                $image = $repeater['image'];
                if ( is_a($image, 'Illuminate\Http\UploadedFile') ) {
                    $imageName = $this->uploadImage($image);
                    $this->createImage($maintenance, $imageName, $repeater['image_description']);
                }
            }
        }
    }

    protected function uploadImage($imageInput)
    {
        $imageName = $imageInput->getClientOriginalName();
        $folder = 'uploads/maintenances/';
        if (! File::exists(public_path($folder))) {
            File::makeDirectory(public_path($folder), 0775, true, true);
        }
        $image = Image::make($imageInput);
        $publicUrl = $folder . $imageName;
        $imagePath = public_path($publicUrl);
        $image->save($imagePath);

        return $imageName;
    }

    protected function createImage($maintenance, $imageName, $description)
    {
        $maintenance->images()->create([
            'file_name' => $imageName,
            'description' => $description
        ]);
    }
}