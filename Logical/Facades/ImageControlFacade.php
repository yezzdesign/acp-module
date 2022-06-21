<?php

namespace Modules\ACP\Logical\Facades;

use Illuminate\Support\Facades\Facade;

class ImageControlFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ImageControl';
    }
}
