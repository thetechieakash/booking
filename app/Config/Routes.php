<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User\Hotel::index', ['as' => 'home']);

$routes->group('hotel', static function ($routes): void {
    $routes->get('details', 'User\Hoteldetails::index', ['as' => 'hotelDetails']);
    $routes->get('checkout', 'User\Hotelcheckout::index', ['as' => 'hotelCheckOut']);
});
$routes->group('trip', static function ($routes) {
    $routes->get('trips', 'User\Trip::index', ['as' => 'trip']);
    $routes->get('details', 'User\Tripdetails::index', ['as' => 'tripDetails']);
    $routes->get('checkout', 'User\Tripcheckout::index', ['as' => 'tripCheckOut']);
});
$routes->group('admin', static function ($routes) {

    // Auth ROUTES (login) — accessible when NOT logged in
    $routes->group('', ['filter' => 'AdminFilter:auth'], static function ($routes) {
        $routes->get('', 'Admin\Login::index', ['as' => 'admin.login']);
        $routes->post('', 'Admin\Login::loginHandler', ['as' => 'admin.login.handler']);
    });

    // AUTH ROUTES (dashboard, logout,register etc) — accessible only when logged in
    $routes->group('', ['filter' => 'AdminFilter:admin'], static function ($routes) {
        $routes->get('home', 'Admin\Home::index', ['as' => 'admin.home']);
        $routes->get('add_property', 'Admin\Addproperty::index', ['as' => 'admin.addProperty']);
        $routes->get('add_room', 'Admin\Addroom::index', ['as' => 'admin.addRoom']);
        $routes->get('members', 'Admin\Members::index', ['as' => 'admin.members']);
        $routes->get('register', 'Admin\Register::index', ['as' => 'admin.register']);
        $routes->get('logout', 'Admin\Logout::logoutHandler', ['as' => 'admin.logout.handler']);
        $routes->get('forgot_password', 'Admin\Forgotpassword::index', ['as' => 'admin.forgot.passowrd']);
        $routes->post('forgot_password', 'Admin\Forgotpassword::forgotPasswordHandler', ['as' => 'admin.forgot.passowrd.handler']);
    });
});

$routes->group('user', static function ($routes): void {
    $routes->get('login', 'User\Login::index', ['as' => 'user.login']);
    $routes->get('register', 'User\Register::index', ['as' => 'user.register']);
});

$routes->set404Override(function () {
    return view('fronts/templates/Layout') .
        view('fronts/Error_404.php') .
        view('fronts/admin/templates/Jsmain');
});
