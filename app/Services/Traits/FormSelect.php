<?php

namespace App\Service;

trait FormSelect
{
    public function select($name, $datas, $withBlank, $selectedValue)
    {
        $fields = [
            'id' => 'id',
            'value' => 'name',
            'withBlank' => $withBlank,
            'selected' => $selectedValue
        ];
        $options = [ 'class' => 'form-control' ];

        return $this->form->dbSelect($datas, $name, $fields, $options);
    }
}