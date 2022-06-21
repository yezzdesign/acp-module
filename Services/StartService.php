<?php

namespace Modules\ACP\Services;

use Modules\ACP\Logical\Facades\Menu;

class StartService
{

    public function __construct () {

        //Menu::add(__('acp::nav.home'), 'acp.backend.index', true);
        //Menu::add(__('Test123'), 'acp.backend.index', true);
        Menu::add(__('acp::nav.home'), 'acp.backend.index', true);
        //app('Menu')->test();

    }
}
