<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
service('auth')->routes($routes);

 $routes->get('/about', 'PagesController::index');
$routes->get('/contact', 'PagesController::index');
$routes->get('/', 'Home::index');

$routes->get('/jobslisting', 'JobsController::index');

//Login Handling
$routes->get('/login','LoginController::index');
$routes->post('/login','LoginController::login');

//Register Handling
$routes->get('/register','RegisterController::index');
$routes->post('/register','RegisterController::post');



