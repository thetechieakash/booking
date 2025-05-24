<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public routes - accessible to everyone
$routes->get('/', 'User\Hotel::index', ['as' => 'home']);

$routes->group('hotel', static function ($routes): void {
    $routes->get('details', 'User\Hoteldetails::index', ['as' => 'hotelDetails']);
    $routes->get('checkout', 'User\Hotelcheckout::index', ['as' => 'hotelCheckOut', 'filter' => 'UserFilter:user']);
});

$routes->group('trip', static function ($routes): void {
    $routes->get('trips', 'User\Trip::index', ['as' => 'trip']);
    $routes->get('details', 'User\Tripdetails::index', ['as' => 'tripDetails']);
    $routes->get('checkout', 'User\Tripcheckout::index', ['as' => 'tripCheckOut', 'filter' => 'UserFilter:user']);
});

// User logout - only accessible if logged in
$routes->get('logout', 'User\Logout::logoutHandler', ['as' => 'user.logout.handler', 'filter' => 'UserFilter:user']);

// User Authentication routes - only accessible if NOT logged in
$routes->group('user', ['filter' => 'UserFilter:guest'], static function ($routes): void {
    $routes->get('login', 'User\Login::index', ['as' => 'user.login']);
    $routes->post('login', 'User\Login::loginHandeler', ['as' => 'user.login.handeler']);
    $routes->get('register', 'User\Register::index', ['as' => 'user.register']);
    $routes->post('register', 'User\Register::registerHandeler', ['as' => 'user.register.handeler']);
});

// Admin Authentication routes - accessible only if NOT logged in
$routes->group('admin', ['filter' => 'UserFilter:noauth'], static function ($routes) {
    $routes->group('', ['filter' => 'AdminFilter:auth'], static function ($routes) {
        $routes->get('', 'Admin\Login::index', ['as' => 'admin.login']);
        $routes->post('', 'Admin\Login::loginHandler', ['as' => 'admin.login.handler']);
    });
});

// Admin Dashboard and other admin routes - accessible only if logged in as admin
$routes->group('admin', ['filter' => 'AdminFilter::admin'], static function ($routes) {
    $routes->get('home', 'Admin\Home::index', ['as' => 'admin.home']);
    $routes->get('add_property', 'Admin\Addproperty::index', ['as' => 'admin.addProperty']);
    $routes->get('add_room', 'Admin\Addroom::index', ['as' => 'admin.addRoom']);
    $routes->get('members', 'Admin\Members::index', ['as' => 'admin.members']);
    $routes->get('register', 'Admin\Register::index', ['as' => 'admin.register']);
    $routes->get('logout', 'Admin\Logout::logoutHandler', ['as' => 'admin.logout.handler']);
    $routes->get('forgot_password', 'Admin\Forgotpassword::index', ['as' => 'admin.forgot.password']);
    $routes->post('forgot_password', 'Admin\Forgotpassword::forgotPasswordHandler', ['as' => 'admin.forgot.password.handler']);
});

// 404 override - custom page for not found routes
$routes->set404Override(function () {
    return view('fronts/templates/Layout') .
        view('fronts/Error_404.php') .
        view('fronts/admin/templates/Jsmain');
});
