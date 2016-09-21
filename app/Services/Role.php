<?php

namespace App\Service;

use Spatie\Permission\Models\Role as RoleModel;

class Role
{
    use FormSelect;

    private $form;

    /**
     * Role constructor.
     * @param $form
     */
    public function __construct(FormGenerator $form)
    {
        $this->form = $form;
    }

    public function roleSelect($name, $withBlank = false, $selectedValue = '')
    {
        $roles = $this->all();
        return $this->select($name, $roles, $withBlank, $selectedValue);
    }

    public function all()
    {
        return RoleModel::all(['id', 'name']);
    }
}