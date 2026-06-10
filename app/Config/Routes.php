<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::page/about');
$routes->get('products', 'Home::page/products');
$routes->get('solutions', 'Home::page/solutions');
$routes->get('projects', 'Home::page/projects');
$routes->get('sustainability', 'Home::page/sustainability');
$routes->get('news', 'Home::page/news');
$routes->get('contact', 'Home::page/contact');
