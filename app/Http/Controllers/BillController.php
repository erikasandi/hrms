<?php

namespace App\Http\Controllers;

use App\Service\Bill;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class BillController extends Controller
{
    /**
     * @var Bill
     */
    private $billService;

    /**
     * BillController constructor.
     * @param Bill $billService
     */
    public function __construct(Bill $billService)
    {
        $this->billService = $billService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function anyData(Request $request)
    {
        return $this->billService->datatableData($request->only(['assetId', 'group']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($group, $assetId = '')
    {
        $data['assetId'] = $assetId;
        $data['group'] = $group;

        return view('assets.bills.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $group, $assetId)
    {
        $this->billService->store($assetId, $request->except(['_token']));

        return redirect('asset-by-group/' . $group . '/' . $assetId . '/detail/#tab_bills');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($group = '', $assetId, $id)
    {
        $bill = $this->billService->getBillById($id);
        $data['bill'] = $bill;
        $data['billDate'] = Carbon::createFromFormat('Y-m-d', $bill->bill_date)->format('m/d/Y');
        $data['assetId'] = $assetId;
        $data['group'] = $group;

        return view('assets.bills.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $group = '', $assetId, $id)
    {
        $this->billService->update($assetId, $id, $request->except(['_token']));

        return redirect('asset-by-group/' . $group . '/' . $assetId . '/detail/#tab_bills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($group = '', $assetId, $id)
    {
        $this->billService->destroy($id);

        return redirect('asset-by-group/' . $group . '/' . $assetId . '/detail/#tab_bills');
    }
}
