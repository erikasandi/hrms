<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\EducationGradeStoreRequest;
use App\Models\EducationGrade;
use App\Service\EducationGrade as EducationgradeService;
use Illuminate\Http\Request;

use App\Http\Requests;

class EducationGradeController extends Controller {

	use DataMessage;

    protected $educationgradeService;
    protected $baseUrl = 'education';

    /**
     * SiteController constructor.
     * @param $educationgradeService
     */
    public function __construct(EducationgradeService $educationgradeService)
    {
        $this->educationgradeService = $educationgradeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('education.list');
    }

     /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->educationgradeService->datatableData();
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EducationGradeStoreRequest $request)
    {
        $this->educationgradeService->createEducationgrade($request->except(['_token']));

        return redirect('education')->with($this->getMessage('store'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['education'] = $this->educationgradeService->getEducationgradeById($id);
        return view('education.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EducationGradeStoreRequest $request, $id)
    {
        $this->educationgradeService->update($id, $request->except(['_token']));

        return redirect('education')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->educationgradeService->destroy($id);

        return redirect('education')->with($this->getMessage('delete'));
    }
}











