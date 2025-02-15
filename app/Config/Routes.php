<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
service('auth')->routes($routes, ['except' => ['login', 'register']]);
//service('auth')->routes($routes);

//Static Pages
$routes->get('/about', 'PagesController::index');
$routes->get('/contact', 'PagesController::index');

//Home Page
$routes->get('/', 'Home::index');

//Jobs Section
$routes->get('/jobslisting', 'JobsController::index');

//Login Handling
$routes->get('/login','LoginController::index');
$routes->post('/login','LoginController::login');

//Register Handling
$routes->get('/register','RegisterController::index');
$routes->post('/register','RegisterController::register');



