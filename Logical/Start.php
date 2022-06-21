<?php

namespace Modules\ACP\Logical;

use Modules\ACP\Logical\Facades\Menu;

class Start
{
        public function __construct () {

            //Menu::add(__('acp::nav.home'), 'acp.backend.index', true , 8);
            Menu::add(__('acp::nav.home'), 'acp.backend.index', true);



        }




}
