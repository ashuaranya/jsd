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

$routes->get('/', 'Home::index');
$routes->get('/projects', 'Home::projects');
$routes->get('/details/(:num)', 'Home::details/$1');
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->get('logout', 'Login::logout', ['filter' => 'auth']);

$routes->match(['get','post'],'admin', 'Login::index', ['filter' => 'noauth']);
$routes->match(['get','post'],'auth', 'Login::auth', ['filter' => 'noauth']);
$routes->match(['get','post'],'register', 'Register::index', ['filter' => 'noauth']);
$routes->match(['get','post'],'save', 'Register::save', ['filter' => 'noauth']);

// CRUD RESTful Routes
$routes->get('navs-list', 'Nav::index');
$routes->get('nav-form', 'Nav::create');
$routes->post('submit-form', 'Nav::store');
$routes->get('edit-view/(:num)', 'Nav::singleNav/$1');
$routes->post('update', 'Nav::update');
$routes->get('delete/(:num)', 'Nav::delete/$1');

// CRUD RESTful Routes
$routes->get('content/navs-list', 'Contentupdate::index');
$routes->get('content/nav-form', 'Content::create');
$routes->post('content/submit-form', 'Content::store');
$routes->get('content/edit-content/(:any)', 'Content::singleContent/$1');
$routes->post('content/update/(:any)', 'Content::update/$1');
$routes->get('content/delete/(:num)', 'Content::delete/$1');

// CRUD RESTful Routes
$routes->get('project/list', 'Projects::index');
$routes->get('project/add', 'Projects::create');
$routes->post('project/submit-form', 'Projects::store');
$routes->get('project/edit-content/(:any)', 'Projects::singleProject/$1');
$routes->post('project/update/(:any)', 'Projects::update/$1');
$routes->get('project/delete/(:num)', 'Projects::delete/$1');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')){
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}