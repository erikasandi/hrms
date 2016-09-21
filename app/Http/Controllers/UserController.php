<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdate;
use App\Service\DatatableParameters;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserStore;
use App\Models\User;
use App\Service\User as UserService;
use App\Service\DatatableGenerator;

class UserController extends Controller
{
    use DatatableParameters;

    protected $baseUrl = 'user';
    protected $userService;

    /**
     * UserController constructor.
     * @param $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('users.list');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        $users = $this->getUsers();
        $actions = $this->actionParameters(['edit','detail','delete']);

        return (new DatatableGenerator($users))
            ->addActions($actions)
            ->addColumn('site', function($user) {
                return $this->getSites($user);
            })
            ->addColumn('role', function($user) {
                return $this->getRoles($user);
            })
            ->generate();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['sites'] = $this->userService->site()->all();
        $data['roles'] = $this->userService->role()->all();
        return view('users.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStore $request)
    {
        $this->userService->store($request->except('_token'));

        return redirect('user')->with(['message' => 'Data has been saved.']);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::find($id);
        $data['sites'] = $this->userService->site()->all();
        $data['roles'] = $this->userService->role()->all();
        $data['selectedSites'] = $this->userService->selectedSites($id);
        $data['selectedRoles'] = $this->userService->selectedRoles($id);

        return view('users.edit', $data);
    }

    /**
     * @param UserUpdate $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserUpdate $request, $id)
    {
        $this->userService->update($id, $request->only(['name', 'email', 'sites', 'roles']));

        return redirect('user')->with(['message' => 'Data has been updated.']);
    }

    public function destroy($id)
    {
        $this->userService->destroy($id);

        return redirect('user')->with(['message' => 'Data has been deleted.']);
    }

    private function getUsers()
    {
        return $this->userService->getList();
    }

    private function getSites($user)
    {
        $sites = $user->sites;
        return array_pluck($sites, 'name');
    }

    private function getRoles($user)
    {
        $roles = $user->roles;
        return array_pluck($roles, 'name');
    }
}
