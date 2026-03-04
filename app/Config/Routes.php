<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin/login','Admin::login');
$routes->post('admin/loginAuth','Admin::loginAuth');
$routes->get('dashboard','Admin::dashboard');
$routes->get('logout','Admin::logout');

$routes->get('users','Users::index');
$routes->get('users/create','Users::create');
$routes->post('users/store','Users::store');
