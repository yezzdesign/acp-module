<?php

namespace Modules\ACP\Services;

use Illuminate\Support\Facades\Blade;

class TableService
{
    protected array $tableHeadContent;
    protected array $tableBodyContent;
    protected array $dataBaseFields;

    protected $tableComplete;
    protected $modelName;

    public function __construct() {

    }

    public function addDatabaseFields( array $databaseFields ):void {
        $this->dataBaseFields   =   $databaseFields;
    }

    public function getDatabaseFields() {
        return $this->dataBaseFields;
    }

    public function addHeader( string $name, int|null $position = null) {
        if ( $position === null ) {
            $this->tableHeadContent[]   =   $name;
        }

        if (is_integer($position)) {
            array_splice($this->tableHeadContent, $position, 0, $name);
        }
    }

    public function addBody( string $name, int|null $position = null) {
        if ( $position === null ) {
            $this->tableBodyContent[]   =   $name;
        }

        if (is_integer($position)) {
            array_splice($this->tableBodyContent, $position, 0, $name);
        }
    }

    public function render( $model , string $modelName) {

        // Table Start
        $render =   '
        <x-acp::table>
            <x-acp::table.header>';

        // TableHeadContent
        foreach ( $this->tableHeadContent as $header )
        {
            $render .=  '<x-acp::table.header.item>'. $header .'</x-acp::table.header.item>';
        }

        // End TableHead / Begin TableBody
        $render .=  '
        </x-acp::table.header>
        <x-acp::table.body>';

        foreach ($model as $modeItem)
        {
            $value   =   $modelName;
            $$value  =   $modeItem;

            $render .=  '<x-acp::table.tr>';

            foreach ( $this->tableBodyContent as $content )
            {
                $render .=  '<x-acp::table.td>';
                    $render .=  view( $content, compact( $value ));
                $render .=  '</x-acp::table.td>';
            }


            $render .=  '</x-acp::table.tr>';
        }

        $render .= '
        </x-acp::table.body>
    </x-acp::table>';

        return Blade::render( $render );
    }

}
