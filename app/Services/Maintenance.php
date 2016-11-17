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

    public function datatableData(array $request)
    {
        $assetId = $request['assetId'];
        $group = $request['group'];
        $this->baseUrl = 'maintenance/' . $group . '/' .$assetId;
        $maintenances = $this->getMaintenances($assetId);
        $actions = $this->actionParameters(['edit', 'delete']);

        return (new DatatableGenerator($maintenances))
            ->addActions($actions)
            ->addColumn('date', function($maintenance) {
                return Carbon::createFromFormat('Y-m-d', $maintenance->maintenance_date)->format('j-F-Y');
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
            'maintenance_date' => Carbon::createFromFormat('m/d/Y', $inputs['date'])->format('Y-m-d'),
            'performance' => $inputs['performance'],
            'description' => $inputs['description']
        ]);

        if (isset($inputs['images'])) {
            $repeaters = $inputs['images'];
            foreach ($repeaters as $repeater) {
                $imageInput = isset($repeater['image']) ? $repeater['image'] : '';
                if ( is_a($imageInput, 'Illuminate\Http\UploadedFile') ) {
                    $imageName = $this->uploadImage($imageInput);
                    $this->createImage($maintenance, $imageName, $repeater['image_description']);
                }
            }
        }
    }

    public function update($assetId, $id, array $inputs)
    {
        $maintenance = $this->getMaintenanceById($id);
        $maintenance->maintenance_type_id = $inputs['maintenance_type_id'];
        $maintenance->asset_id = $assetId;
        $maintenance->maintenance_date = Carbon::createFromFormat('m/d/Y', $inputs['date'])->format('Y-m-d');
        $maintenance->performance = $inputs['performance'];
        $maintenance->description = $inputs['description'];
        $maintenance->save();

        $formRepeaters = $inputs['images'];
        $existingImages = $maintenance->images;
        $existingIds = $this->getExistingImageIds($existingImages);

        $submittedIds = $this->checkSubmittedIds($formRepeaters);

        // check deleted images
        foreach ($existingIds as $existingId) {
            if (! in_array($existingId, $submittedIds)) {
                $maintenance->images()->where('id', $existingId)->delete();
            }
        }

        // check new & updated images
        foreach ($formRepeaters as $repeater) {
            $imageId = isset($repeater['image_id']) ? $repeater['image_id'] : '';
            $imageInput = isset($repeater['image']) ? $repeater['image'] : '';
            if ($imageId == '') {
                if ($imageInput != '' && is_a($imageInput, 'Illuminate\Http\UploadedFile')) {
                    $imageName = $this->uploadImage($imageInput);
                    $this->createImage($maintenance, $imageName, $repeater['image_description']);
                }
            } else {
                $image = $maintenance->images()->where('id', $imageId)->first();
                if ($imageInput != '' && is_a($imageInput, 'Illuminate\Http\UploadedFile')) {
                    // update the image
                    $imageName = $this->uploadImage($imageInput);
                    $image->title = $imageName;
                    $image->path = $imageName;
                } else {
                    // just update the description
                }
                $image->save();
            }
        }

    }

    private function getExistingImageIds($existingImages)
    {
        $existingIds = [];
        foreach ($existingImages as $existingImage) {
            $existingIds[] = $existingImage->id;
        }

        return $existingIds;
    }

    private function checkSubmittedIds($formRepeaters)
    {
        $submittedIds = [];
        foreach ($formRepeaters as $formRepeater) {
            if (isset($formRepeater['image_id']) && $formRepeater['image_id'] != '') {
                $submittedIds[] = $formRepeater['image_id'];
            }
        }

        return $submittedIds;
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

    public function getMaintenanceById($id)
    {
        return MaintenanceModel::find($id);
    }

    public function destroy($id)
    {
        return MaintenanceModel::destroy($id);
    }
}