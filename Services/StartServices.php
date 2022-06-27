<?php

namespace Modules\ACP\Services;

use Modules\ACP\Logical\Facades\Menu;

class StartServices
{
    protected string $prefix;
    protected array $pageModules;

    protected string $tableBodyPrefix   =   'acp::tableComponents.';

    public function __construct () {}

    /**
     * Create "Create"/"Edit" Page
     * @param string $abstract Name of the Class
     * @param array $pageModules All Page Modules
     * @param string $prefix Form prefix
     * @return void
     */
    protected function createPage( string $abstract, array $pageModules, string $prefix = 'acp::forms' ):void {

        // Add Page Items
        foreach ( $pageModules as $module)
        {
            app($abstract)->add($prefix . $module);
        }
    }

    /**
     * Add new Menuitem to Navigation
     * @param string $name The Name of the Menuitem
     * @param string $link The Route
     * @param boolean $isRoute Is this a Route?
     * @param int|boolean $setID ID where it will display
     * @return void
     */
    protected function addMenu( string $name, string $link, bool $isRoute = false, int|bool $setID = false ):void {

        Menu::add($name, $link, $isRoute, $setID);

    }

    protected function createTable( string $abstract, array $tableNames, array $tableBody, $tableBodyPrefix = null) {

        foreach ( $tableNames as $name ) {
            app($abstract)->addHeader($name);
        }

        foreach ( $tableBody as $body) {
            app($abstract)->addBody($tableBodyPrefix??$this->tableBodyPrefix . $body);
        }
    }

    protected function addDatabaseFields( string $abstract, array $databaseFields ) {
        app($abstract)->addDatabaseFields( $databaseFields );
    }


}


