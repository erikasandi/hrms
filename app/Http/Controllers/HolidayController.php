<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
//use Validator;
//use App\Models\Holiday;

use Calendar;

use App\Service\DataMessage;
use App\Http\Requests\HolidayStoreRequest;
use App\Models\Holiday;
use App\Service\Holiday as HolidayService;

class HolidayController extends Controller {

    use DataMessage;

    protected $holidayService;
    protected $baseUrl = 'holiday';

    /**
     * SiteController constructor.
     * @param $genderService
     */
    public function __construct(HolidayService $holidayService)
    {
        $this->holidayService = $holidayService;
    }


    public function index(){
        $holidays = Holiday::get();
        $holiday_list = [];
        foreach ($holidays as $key => $holiday) {
            $holiday_list[] = Calendar::event(
                $holiday->title,
                true,
                new \DateTime($holiday->started_at),
                //new \DateTime($holiday->ended_at.' +1 day')
                new \DateTime($holiday->ended_at)
            );
        }
        $calendar_details = Calendar::addEvents($holiday_list);

        return view('calendar.index', compact('calendar_details'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(HolidayStoreRequest $request)
    {
        $this->holidayService->createHoliday($request->except(['_token']));
        return redirect('holiday')->with($this->getMessage('store'));
    }
}











