<?php

namespace App\Service;

use Spatie\Permission\Models\Permission as PermissionModel;

class Permission
{
    protected $form;

    /**
     * Permission constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function getPermissions()
    {
        return PermissionModel::all();
    }

    public function permissionSelect($name, $defaultValue = null)
    {
        $permissions = $this->getPermissions();
        $fields = [
            'id' => 'name',
            'value' => 'name'
        ];
        if (!is_null($defaultValue)) {
            $fields['selected'] = $defaultValue;
        }
        return $this->form->dbSelect($permissions, $name, $fields, ['class' => 'form-control']);
    }
}