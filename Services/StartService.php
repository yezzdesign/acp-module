<?php

namespace Modules\ACP\Services;

class StartService extends StartServices
{

    public function __construct()
    {
        parent::__construct();

        $this->addMenu(__('acp::nav.home'), 'acp.backend.index', true);
    }
}
