<?php

namespace App\Http\Controllers;

use App\Service\DatatableGenerator;
use Illuminate\Http\Request;

use App\Http\Requests;

class AssetController extends Controller
{

    public function index()
    {
        return view('assets.list');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        $users = $this->getAssets();
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

    private function getAssets()
    {
        return '';
    }

}
