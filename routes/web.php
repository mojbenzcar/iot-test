<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$router->get(
    '/',
    [
        'as'   => 'home',
        'uses' => 'HomeController@index',
    ]
);
$router->get('/devices/{id}', ['as' => 'devices.show', 'uses' => 'DeviceController@show']);
$router->get(
    '/devices',
    [
        'as' => 'devices',
        function () {
            return view('simulated_device.index');
        },
    ]
);

$router->post(
    '/devices',
    ['as' => 'devices.create', 'uses' => 'DeviceController@create']
);
$router->post(
    '/devices/notification/{device}',
    ['as' => 'devices.notification', 'uses' => 'NotificationController@send']
);
