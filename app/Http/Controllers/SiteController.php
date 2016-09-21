<?php

namespace App\Http\Controllers;

use App\Service\DatatableGenerator;
use App\Http\Requests\SiteStoreRequest;
use App\Models\Site;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{

    protected $baseUrl = 'site';
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
        $users = $this->getSites();
        $actions = $this->actionParameters();

        return (new DatatableGenerator($users))
            ->addActions($actions)
            ->generate();
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
        if ($this->createSite($request->except(['_token'])) ) {
            return redirect('site')->with(['message' => 'Data has been saved.']);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['site'] = Site::find($id);
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
        $site = Site::find($id);
        $site->name = $request->input('name');
        $site->description = $request->input('description');
        $site->save();

        return redirect('site')->with(['message' => 'Data has been updated.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Site::find($id)->delete();

        return redirect('site')->with(['message' => 'Data has been deleted.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    private function actionParameters()
    {
        $actions = [
            'edit'  => [
                'title'     => 'Edit',
                'link'      => $this->baseUrl . '/%s' . '/edit',
                'class'     => 'btn btn-xs btn-default',
                'icon'      => 'fa fa-edit'
            ],
            'delete' => [
                'title'     => 'Delete',
                'link'      => $this->baseUrl . '/%s' . '/delete',
                'class'     => 'btn btn-xs btn-default btn-delete',
                'icon'      => 'fa fa-times',
            ]
        ];

        return $actions;
    }

    private function getSites()
    {
        return Site::all();
    }

    private function createSite($input)
    {
        return Site::create($input);
    }
}
