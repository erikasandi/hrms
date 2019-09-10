<?php

namespace App\Service;

use App\Models\Holiday as HolidayModel;

class Holiday
{
    use DatatableParameters;

    protected $form;
    protected $baseUrl = 'holiday';

    /**
     * Site constructor.
     */
    public function __construct()
    {
        $this->form = new FormGenerator();
    }

    public function createHoliday(array $inputs)
    {
        return HolidayModel::create($inputs);
    }
}