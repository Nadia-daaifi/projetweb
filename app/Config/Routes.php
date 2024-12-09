<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/site/acceuil', 'Home::index');
$routes->get('/site/about', 'Home::about');
$routes->get('/site/classes', 'Home::classes');
$routes->get('/site/contact', 'Home::contact');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/calender', 'Admin::calender');
$routes->get('/admin/coach/add', 'Admin::addCoach');
$routes->get('/admin/client/add', 'Admin::addClient');
$routes->get('/admin/coach/show', 'Admin::cliste');
$routes->get('/admin/client/show', 'Admin::Claffiche');
$routes->get('/admin/profil', 'Admin::profil');
$routes->get('auth/register', 'Auth::register'); // Route for the register form
$routes->get('auth/login', 'Auth::login');
$routes->get('admin/deleteCoach/(:num)', 'Admin::deleteCoach/$1');
$routes->get('admin/editCoach/(:num)', 'Admin::editCoach/$1');
$routes->get('admin/deleteClient/(:num)', 'Admin::deleteClient/$1');
$routes->get('admin/editClient/(:num)', 'Admin::editClient/$1');
$routes->get('auth/logout', 'Auth::logout');
$routes->post('auth/save_register', 'Auth::save_register'); // Route for processing registration
$routes->post('auth/check_login', 'Auth::check_login');
$routes->post('/addCoach', 'Auth::add_coach');
$routes->post('admin/updateCoach/(:num)', 'Auth::updateCoach/$1');
$routes->post('/addClient', 'Auth::add_client');
$routes->post('admin/updateClient/(:num)', 'Auth::updateClient/$1');
$routes->get('admin/clients', 'Admin::showClients');
$routes->get('admin/absence/cl', 'Admin::showAbs');
$routes->get('admin/absence/client/(:num)', 'Admin::markAbsence/$1');
$routes->get('admin/absence/co', 'Admin::showAbs_coach');
$routes->get('admin/absence/coach/(:num)', 'Admin::markAbs_coach/$1');




