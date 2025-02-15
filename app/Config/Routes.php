<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/about', 'PagesController::index');
$routes->get('/contact', 'PagesController::index');
$routes->get('/', 'Home::index');

$routes->get('/jobslisting', 'JobsController::index');
$routes->get('/login','LoginController::index');

//User Registration
$routes->get('register', 'RegisterController::index');
$routes->post('register', 'RegisterController::register');

