<?php

namespace Modules\ACP\Services;




use Illuminate\Routing\Route;

class MenuService
{

    private static $items           =   array();


    public static function add(string $name, string $link, bool $isRoute = false, int|bool $setID = false): int
    {

        /* Get the raw items from app */
        $array          =   self::$items;

        /* Check if $setID is given (elseif is an integer) and manipulate the ArrayID to fill with value */
        $id =   ($setID !== false) ? $setID : count($array) + 1;

        /* Save Items in Array*/
        $array[$id]     =   [ 'name' => $name, 'link' => $link, 'isRoute' => $isRoute ];

        /* Save Items in ClassArray */
        self::$items    =   $array;

        /* Return the ArrayID of these Item */
        return $id;
    }

    /**
     * @return array
     */
    public static function getItems(): array
    {
        ksort(self::$items);

        return self::$items;
    }

    public static function render(): mixed
    {
        //$menus  =   self::getItems();

        return view('acp::components.navigation.app');

    }
}
