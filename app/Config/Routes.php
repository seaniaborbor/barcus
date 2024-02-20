<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PublicController::index');
$routes->get('/service/(:any)', 'PublicController::service/$1');
$routes->get('/subservice/(:any)', 'PublicController::subservice/$1');

$routes->get('/about', 'PublicController::about');
$routes->get('/contact', 'PublicController::contact');

$routes->get('payment/', 'PaymentController::index');
$routes->post('payment', 'PaymentController::index');


// ANY ROUTE BELOW IS ONLY MENT TO BE ACCESS BY ADMIN 

$routes->get('/dashboard', 'DashboardController::index');

$routes->get('/dashboard/menu/', 'MenuController::index');
$routes->post('/dashboard/menu/', 'MenuController::index');
$routes->get('/dashboard/menu/edit/(:any)', 'MenuController::edit/$1');
$routes->post('/dashboard/menu/edit/(:any)', 'MenuController::edit/$1');

$routes->get('/dashboard/service/', 'ServiceController::index');
$routes->post('/dashboard/service/', 'ServiceController::index');
$routes->get('/dashboard/service/edit/(:any)', 'ServiceController::edit/$1');
$routes->post('/dashboard/service/edit/(:any)', 'ServiceController::edit/$1');


$routes->get('/dashboard/gallery/', 'GalleryController::index');
$routes->get('/dashboard/user/', 'UserController::index');
