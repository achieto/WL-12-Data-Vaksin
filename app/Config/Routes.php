<?php

namespace Config;

use App\Models\VaksinModel;

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
$routes->setDefaultController('VaksinController');
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
$routes->get('/', 'Templating::login');
$routes->get('/admin', 'Templating::admin');
$routes->get('/super', 'Templating::super');
$routes->get('/validator', 'Templating::validator');
$routes->get('/aboutadmin', 'Templating::aboutadmin');
$routes->get('/aboutsuper', 'Templating::aboutsuper');
$routes->get('/entrysuper', 'VaksinController::entry_super');
$routes->get('/entryvalid', 'VaksinController::entry_valid');
$routes->post('/login_action', 'Login::login_action');
$routes->get('/logout', 'Login::logout');
$routes->get('/wilayah1', 'VaksinController::wil1');
$routes->get('/wilayah2', 'VaksinController::wil2');
$routes->get('/wilayah3', 'VaksinController::wil3');
$routes->get('/wilayah4', 'VaksinController::wil4');
$routes->get('/input', 'VaksinController::create');
$routes->get('/inputadmin', 'Login::create');
$routes->get('/cetak/(:any)', 'VaksinController::cetak/$1');
$routes->post('/store', 'VaksinController::store');
$routes->post('/storeadmin', 'Login::store');
$routes->get('/edit/(:any)', 'VaksinController::edit/$1');
$routes->post('/update/(:any)/(:any)', 'VaksinController::update/$1/$2');
$routes->post('/validasisuper/(:any)', 'VaksinController::validasi_super/$1');
$routes->post('/validasivalid/(:any)', 'VaksinController::validasi_valid/$1');
$routes->delete('/delete/(:any)/(:any)', 'VaksinController::delete/$1/$2');

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