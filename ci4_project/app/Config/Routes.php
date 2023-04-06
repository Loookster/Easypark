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
$routes->get('/', 'Home::index');
$routes->get('/Users', 'Users::index');
$routes->get('/Users/edit/(:num)', 'Users::edit/$1');
$routes->post('Users/update/(:num)', 'Users::update/$1');
$routes->get('/Parking', 'Parking::index');
$routes->get('/ParkingMonitor', 'ParkingMonitor::index');
$routes->get('/Parking/updateSlotStatus/(:num)', 'Parking::updateSlotStatus/$1');
$routes->get('/Dashboard', 'Dashboard::index');
$routes->get('/Transaction', 'Transaction::index');
$routes->post('/Transaction/deduct', 'Transaction::deduct');
$routes->get('/ParkingSlotController', 'ParkingSlotController::index');
$routes->post('/ParkingSlotController/update-status/(:num)', 'ParkingSlotController::updateStatus/$1');
$routes->get('/LoginController', 'LoginController::index');
$routes->post('/LoginController/login', 'LoginController::login');
$routes->add('/LoginController/register', 'LoginController::register');
$routes->get('/UserDashboard', 'UserDashboard::index');
$routes->get('/SlotsController', 'SlotsController::index');
$routes->get('/HistoryController', 'HistoryController::index');
$routes->get('/UpdateBalanceController', 'UpdateBalanceController::index');
$routes->get('/TransactionController', 'TransactionController::index');
$routes->get('/AdminViewController', 'AdminViewController::index');
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
