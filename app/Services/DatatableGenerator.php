<?php

namespace App\Service;


use Illuminate\Database\Eloquent\Collection;
use Datatables;
use Illuminate\Support\Facades\Log;

class DatatableGenerator
{
    private $collection;
    private $datatable;

    /**
     * DatatableGenerator constructor.
     * @param $collection
     */
    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
        $this->datatable = Datatables::of($collection);
    }

    public function addColumn($name, $closure)
    {
        $this->datatable->addColumn($name, $closure);
        return $this;
    }

    public function addActions(array $actions = [], array $extras = [])
    {
        $this->datatable->addColumn('action', function ($collection) use ($actions, $extras) {
            $action = '<div class="text-center">';

            // extra actions
            if (count($extras) > 0) {
                $action .= '<div class="btn-group">';
                $action .= '<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Others
                                <i class="fa fa-angle-down"></i>
                            </button>';
                $action .= '<ul class="dropdown-menu " role="menu">';
                foreach ($extras as $act) {
                    $link = $this->generateActionLink($act, $collection);
                    if ($link != '') {
                        $class = ( $act['class'] ? $act['class'] : '' );
                        $icon = ( $act['icon'] ? '<i class="' . $act['icon'] . '"></i>' : '' );
                        $action .= '<li><a href="' .$link. '" class="' . $class . '">' . $icon . '&nbsp;<span>' . $act['title'] . '</span></a></li> ';
                    }
                }
                $action .= '</ul>';
                $action .= '</div>&nbsp;&nbsp;';
            }

            // inline actions
            $link = '';
            foreach ($actions as $act) {
                $link = $this->generateActionLink($act, $collection);
                if ($link != '') {
                    $class = ( $act['class'] ? $act['class'] : '' );
                    $icon = ( $act['icon'] ? '<i class="' . $act['icon'] . '"></i>&nbsp;' : '' );
                    $action .= '<a href="' .$link. '" class="' . $class . '">' . $icon . '<span>' . $act['title'] . '</span></a> ';
                }
            }
            if ($link == '') {
                $action .= '-------';
            }

            return $action;
        });

        return $this;
    }

    public function generate()
    {
        return $this->datatable->make(true);
    }

    private function generateActionLink($act, $collection)
    {
        $show = true;
        if ( isset($act['whereClause']) ) {
            $whereClause = $act['whereClause'];
            $show = $whereClause($collection);
        }
        $link = $act['link'];
        return ( $show ? ( $link ? sprintf($link, $collection->id) : '' ) : '' );
    }
}