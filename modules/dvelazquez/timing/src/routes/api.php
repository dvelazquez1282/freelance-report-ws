<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('api')->prefix('api')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::name('timings.')->prefix('timings')->group(function () {    
            Route::get('/{id}', 'DVelazquez\Timing\Http\Controllers\TimingController@get');
            Route::get('/', 'DVelazquez\Timing\Http\Controllers\TimingController@list');
            Route::post('/', 'DVelazquez\Timing\Http\Controllers\TimingController@save');
            Route::put('/{id}', 'DVelazquez\Timing\Http\Controllers\TimingController@put');
            Route::delete('/{id}', 'DVelazquez\Timing\Http\Controllers\TimingController@delete');
        });
    });
});