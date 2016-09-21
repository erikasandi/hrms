<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuStore;
use App\Http\Requests\MenuUpdate;
use App\Service\DatatableGenerator;
use App\Service\DatatableParameters;
use App\Service\MenuService;
use App\Service\Permission as PermissionService;
use Illuminate\Http\Request;

use App\Http\Requests;

class MenuController extends Controller
{
    use DatatableParameters;

    protected $menuService;
    protected $baseUrl = 'menu';
    protected $permissionService;

    /**
     * MenuController constructor.
     * @param $menuService
     */
    public function __construct(MenuService $menuService, PermissionService $permissionService)
    {
        $this->menuService = $menuService;
        $this->permissionService = $permissionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menus.list');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        $menus = $this->getMenus();
        $actions = $this->actionParameters(['edit','delete']);

        return (new DatatableGenerator($menus))
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
        $data['parent'] = $this->menuService->parentSelect('parent_id');
        $data['permission'] = $this->permissionService->permissionSelect('permission');
        return view('menus.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MenuStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuStore $request)
    {
        $this->menuService->store($request->except(['_token']));

        return redirect('menu')->with(['message' => 'Data has been saved.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = $this->menuService->getMenuById($id);
        $data['theMenu'] = $menu;
        $data['parent'] = $this->menuService->parentSelect('parent_id', $menu->parent_id);
        $data['permission'] = $this->permissionService->permissionSelect('permission', $menu->permission);

        return view('menus.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MenuUpdate $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuUpdate $request, $id)
    {
        $this->menuService->update($id, $request->except(['_token']));

        return redirect('menu')->with(['message' => 'Data has been updated.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->menuService->destroy($id);

        return redirect('menu')->with(['message' => 'Data has been deleted.']);
    }

    private function getMenus()
    {
        return $this->menuService->getMenus();
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
}
