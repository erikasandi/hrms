<?php

namespace App\Service;

use Form;

class FormGenerator
{
    /**
     * @param $datas
     * @param $name
     * @param array $fields (id, value, selected, withBlank)
     * @param array $options
     * @return mixed
     */
    public function dbSelect($datas, $name, array $fields, $options = array())
    {
        extract($fields);

        if (isset($withBlank) && $withBlank) {
            $items[0] = '----';
        }

        $selectedValue = ( isset($selected) ? $selected : '' );

        if ( isset($id) ) {
            foreach ($datas as $data) {
                $items[$data->$id] = $data->$value;
            }
        } else {
            $items = $datas;
        }

        return Form::select($name, $items, $selectedValue, $options);
    }
}