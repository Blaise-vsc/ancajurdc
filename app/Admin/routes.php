<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('commodites', CommoditesController::class);
    $router->resource('rooms', ChambreController::class);
    $router->resource('chambres', ChambreController::class);
    $router->resource('commandes', CommandeController::class);
    $router->resource('reservations', ReservationsController::class);
    $router->resource('messages', MessageController::class);
    $router->resource('ancajus', AncajuController::class);

});
