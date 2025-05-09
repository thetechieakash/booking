<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::home',['as'=>'home']);
// $routes->get('/hotel-details', 'Home::hotelDetails', ['as' => 'hotelDetails']);
$routes->group('', static function ($routes): void {
    $routes->get('/', 'Home::home', ['as' => 'home']);
    $routes->get('details', 'Home::hotelDetails', ['as' => 'hotelDetails']);
    $routes->get('checkout', 'Home::hotelCheckOut', ['as' => 'hotelCheckOut']);
});
$routes->group('trip', static function ($routes) {
    $routes->get('/', 'Trip::trip', ['as' => 'trip']);
    $routes->get('details', 'Trip::tripDetails', ['as' => 'tripDetails']);
    $routes->get('checkout', 'Trip::checkout', ['as' => 'tripCheckOut']);
});
$routes->group('admin', static function ($routes) {
    $routes->get('/', 'Admin::home', ['as' => 'admin']);
    $routes->get('details', 'Trip::tripDetails', ['as' => 'tripDetails']);
    $routes->get('checkout', 'Trip::checkout', ['as' => 'tripCheckOut']);
});
