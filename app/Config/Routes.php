<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home', ['as' => 'home']);

$routes->group('hotel', static function ($routes): void {
    $routes->get('details', 'Home::hotelDetails', ['as' => 'hotelDetails']);
    $routes->get('checkout', 'Home::hotelCheckOut', ['as' => 'hotelCheckOut']);
});
$routes->group('trip', static function ($routes) {
    $routes->get('trips', 'Trip::trip', ['as' => 'trip']);
    $routes->get('details', 'Trip::tripDetails', ['as' => 'tripDetails']);
    $routes->get('checkout', 'Trip::tripCheckOut', ['as' => 'tripCheckOut']);
});
$routes->group('admin', static function ($routes) {

    // GUEST ROUTES (login, register) — accessible when NOT logged in
    $routes->group('', ['filter' => 'cifilter:guest'], static function ($routes) {
        $routes->get('', 'Admin::login', ['as' => 'admin.login']);
        $routes->post('', 'Admin::loginHandler', ['as' => 'admin.login.handler']);
    });
    
    // AUTH ROUTES (dashboard, logout, etc) — accessible only when logged in
    $routes->group('', ['filter' => 'cifilter:auth'], static function ($routes) {
        $routes->get('register', 'Admin::register', ['as' => 'admin.register']);
        $routes->get('logout', 'Admin::logoutHandler', ['as' => 'admin.logout.handler']);
        $routes->get('home', 'Admin::home', ['as' => 'admin.home']);
        $routes->get('add_property', 'Admin::addProperty', ['as' => 'admin.addProperty']);
        $routes->get('add_room', 'Admin::addRoom', ['as' => 'admin.addRoom']);
        $routes->get('members', 'Admin::members', ['as' => 'admin.members']);
    });
});

$routes->group('user', static function ($routes): void {
    $routes->get('login', 'UserAuth::login', ['as' => 'user.login']);
    $routes->get('register', 'UserAuth::register', ['as' => 'user.register']);
});
