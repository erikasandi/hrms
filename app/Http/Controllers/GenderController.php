<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\GenderStoreRequest;
use App\Models\Gender;
use App\Service\Gender as GenderService;
use Illuminate\Http\Request;

use App\Http\Requests;

class GenderController extends Controller {

	use DataMessage;

    protected $genderService;
    protected $baseUrl = 'gender';

    /**
     * SiteController constructor.
     * @param $genderService
     */
    public function __construct(GenderService $genderService)
    {
        $this->genderService = $genderService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gender.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->genderService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gender.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenderStoreRequest $request)
    {
        $this->genderService->createGender($request->except(['_token']));
        return redirect('gender')->with($this->getMessage('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['gender'] = $this->genderService->getGenderById($id);
        return view('gender.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(GenderStoreRequest $request, $id)
    {
        $this->genderService->update($id, $request->except(['_token']));

        return redirect('gender')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->genderService->destroy($id);

        return redirect('gender')->with($this->getMessage('delete'));
    }

}











