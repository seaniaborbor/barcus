<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PublicController::index');
$routes->get('/service/(:any)', 'PublicController::service/$1');
$routes->get('/subservice/(:any)', 'PublicController::subservice/$1');
$routes->post('search/', 'PublicController::search');
$routes->get('about/', 'PublicController::about');

$routes->get('/contact', 'PublicController::contact');

$routes->get('payment/', 'PaymentController::index');
$routes->post('payment', 'PaymentController::index');

$routes->get('/blog-details/(:any)', 'Publiccontroller::blog_details/$1');
$routes->post('/blog-details/(:any)', 'Publiccontroller::blog_details/$1');
$routes->get('/blog', 'Publiccontroller::blog');
$routes->get('/blog/(:any)', 'Publiccontroller::blog/$1');

$routes->get('/auth', 'AuthController::index');
$routes->post('/auth', 'AuthController::index');
$routes->get('/logout', 'AuthController::logout');


// ANY ROUTE BELOW IS ONLY MENT TO BE ACCESS BY ADMIN 

$routes->group("", ['filter'=>'agentProtector'], function($routes){

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

// admin blog routes 
$routes->get('/dashboard/blog', 'BlogController::index');
$routes->post('/dashboard/blog', 'BlogController::index');
$routes->get('/dashboard/edit/blog/(:any)', 'BlogController::edit/$1');
$routes->post('/dashboard/edit/blog/(:any)', 'BlogController::edit/$1');
$routes->get('/dashboard/delete/blog/(:any)', 'BlogController::delete/$1');

// team members routes
$routes->get('/dashboard/team', 'TeamMemberController::index');
$routes->post('/dashboard/team', 'TeamMemberController::index');
$routes->get('/dashboard/edit/team/(:any)', 'TeamMemberController::edit/$1');
$routes->post('/dashboard/edit/team/(:any)', 'TeamMemberController::edit/$1');

// testimonials routes
$routes->get('/dashboard/testimonials', 'TestimonialsController::index');
$routes->post('/dashboard/testimonials', 'TestimonialsController::index');
$routes->get('/dashboard/edit/testimonials/(:any)', 'TestimonialsController::edit/$1');
$routes->post('/dashboard/edit/testimonials/(:any)', 'TestimonialsController::edit/$1');
$routes->get('/dashboard/delete/testimonials/(:any)', 'TestimonialsController::delete/$1');

// orders routes
$routes->get('/dashboard/orders/(:any)', 'PaymentController::view_orders/$1');
$routes->get('/dashboard/delete/orders/(:any)', 'PaymentController::delete/$1');

});