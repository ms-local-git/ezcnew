<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->match(
    ['get', 'post'],
    'attendance/request-attendance/(:any)',
    'UserAttendance::requestAttendence/$1'
);

$routes->get('request-attendance-list','UserAttendance::reqAttendenceList');
$routes->post(
    'attendance/requests/status',
    'UserAttendance::updateStatus'
);



$routes->get('/', 'Home::index');
$routes->post('/toggle_sidebar', 'Home::toggle_sidebar');
// $routes->get('/login', 'Login::index');

$routes->get('/test', 'Home::test');
$routes->get('roles', 'Roles::index');
$routes->get('roles/create', 'Roles::create');
$routes->post('roles/store', 'Roles::store');
$routes->get('roles/edit/(:num)', 'Roles::edit/$1');
$routes->post('roles/update/(:num)', 'Roles::update/$1');
$routes->get('unauthorized', 'Home::unauthorized');

$routes->get('attendance', 'UserAttendance::index');
$routes->get('attendance/details/(:any)', 'UserAttendance::details/$1');
$routes->get('attendance/day/(:any)', 'UserAttendance::day/$1');
$routes->get('user-desktime', 'UserAttendance::user_desk_time');
$routes->post('store-attendence', 'UserAttendance::store_attendence');

// BPT routes
$routes->get('bptdir', 'BptController::bptDir');
$routes->post('addbptdir', 'BptController::AddbptData');
$routes->get('bpt/(:num)', 'BptController::bpt/$1');
$routes->get('bptlist/(:num)', 'BptController::Showbptlist/$1');
$routes->match(['get', 'post'], 'insertbpt', 'BptController::Insertbpt');
$routes->get('BptController/GetUserallData', 'BptController::GetUserallData');
$routes->post('bptController/copybptForm', 'BptController::copybptForm');

// CPT routes
$routes->get('cptdir', 'CptController::CptDir');
$routes->post('addcptdir', 'CptController::AddCptData');
$routes->get('cpt/(:num)', 'CptController::Cpt/$1');
$routes->get('cptlist/(:num)', 'CptController::Showcptlist/$1');
$routes->match(['get', 'post'], 'insertcpt', 'CptController::InsertCpt');
$routes->get('CptController/GetUserallData', 'CptController::GetUserallData');
$routes->post('CptController/copyCptForm', 'CptController::copycptForm');

// DPT routes
$routes->get('dptdir', 'DptController::dptDir');
$routes->post('adddptdir', 'DptController::AdddptData');
$routes->get('dpt/(:num)', 'DptController::dpt/$1');
$routes->get('dptlist/(:num)', 'DptController::Showdptlist/$1');
$routes->match(['get', 'post'], 'insertdpt', 'DptController::Insertdpt');
$routes->get('DptController/GetUserallData', 'DptController::GetUserallData');
$routes->post('DptController/copydptForm', 'DptController::copydptForm');




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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
