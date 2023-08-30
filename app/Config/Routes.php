<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'User::index');
$routes->get('/user', 'User::index');
$routes->get('/user/index', 'User::index');
$routes->get('/user/edit/(:num)', 'User::edit/$1');
$routes->post('/user/update/(:segment)', 'User::index');
// $routes->get('/user/detail/(:num)', 'User::detail/$1');
// $routes->post('/user/update/(:segment)', 'User::update/$1');
// $routes->post('/user/save', 'User::save');
// $routes->delete('/user/(:num)', 'User::delete/$1');

// Auth Routes Login
$routes->get('/', 'Home::index', ['filter' => 'login']);
$routes->get('/home', 'Home::index', ['filter' => 'login']);

// Admin Routes Admin
// $routes->get('/users', 'User::index');
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/members', 'Admin::members', ['filter' => 'role:admin']);
$routes->get('/admin/create', 'Admin::create', ['filter' => 'role:admin']);
$routes->get('/admin/member/(:any)', 'Admin::member/$1', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);






// Auth Routes
$routes->get('/home', 'Home::index');
$routes->get('/home/login', 'Home::index');
$routes->get('/home/register', 'Home::register');
$routes->get('/home/forgot', 'Home::forgot');
$routes->get('/home/user', 'Home::user');
$routes->get('/home/data', 'Home::data');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
