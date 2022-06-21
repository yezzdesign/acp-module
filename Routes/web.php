<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Generate all Routes for Module "ACP".
|
| All Items are prefixed with "acp." (url strings, named routes, etc)
| All Items used the "auth" middleware
|
| @author:  Yezz.Design
| @email:   yezz.design@schodie.de
| @version: 0.0.1 Alpha
|
*/

Route::name('acp.')->group(function () {
    Route::group(['middleware' => ['auth'], 'prefix' => 'acp'], function () {

        Route::get('/',             [\Modules\ACP\Http\Controllers\ACPController::class, 'index'])                  ->name('backend.index');

    });
});
