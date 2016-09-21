<?php

namespace App\Http\Controllers;

use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use App\Http\Requests\SiteStoreRequest;
use App\Models\Site;
use App\Service\Site as SiteService;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    use DataMessage;

    protected $siteService;
    protected $baseUrl = 'site';

    /**
     * SiteController constructor.
     * @param $siteService
     */
    public function __construct(SiteService $siteService)
    {
        $this->siteService = $siteService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sites.list');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->siteService->datatableData();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sites.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteStoreRequest $request)
    {
        $this->siteService->createSite($request->except(['_token']));

        return redirect('site')->with($this->getMessage('store'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['site'] = $this->siteService->getSiteById($id);
        return view('sites.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SiteStoreRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiteStoreRequest $request, $id)
    {
        $this->siteService->update($id, $request->except(['_token']));

        return redirect('site')->with($this->getMessage('update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->siteService->destroy($id);

        return redirect('site')->with($this->getMessage('delete'));
    }

}
