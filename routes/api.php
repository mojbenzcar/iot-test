<?php

use Illuminate\Http\Request;

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


Route::post('device/{device}/report', 'ReportController@receive');
Route::post('device/{device}/start', 'DeviceController@start');
Route::post('device/{device}/stop', 'DeviceController@stop');
Route::post('device/{device}/report_acknowledgement', 'DeviceController@acknowledge');
