<?php

namespace Modules\ACP\Logical\Facades;

use Illuminate\Support\Facades\Facade;

class Menu extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Menu';
    }
}
