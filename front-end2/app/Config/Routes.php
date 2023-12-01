<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('user', 'User::User');
$routes->match(['post', 'options'], 'Add/user', 'User::create');  
$routes->match(['put', 'options'], 'Update/user/(:segment)', 'User::update/$1');  // Corrected method name to 'create'
$routes->match(['put', 'options'], 'Edit/user/(:segment)', 'User::update/$1');
$routes->match(['delete', 'options'], 'Delete/user/(:segment)', 'User::delete/$1');