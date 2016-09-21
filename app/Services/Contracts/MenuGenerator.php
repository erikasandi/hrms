<?php
namespace App\Service;

use Illuminate\Http\Request;
use Lavary\Menu\Builder;
use Lavary\Menu\Item;

abstract class MenuGenerator
{
    abstract function generateMenu(Request $request);

    abstract function activateItem(Builder $item, $menuId);
}