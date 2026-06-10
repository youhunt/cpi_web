<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::redirectDefault');
$routes->get('meeting-demo', 'Home::meetingDemo');

service('auth')->routes($routes);

$routes->group('(:segment)', static function ($routes) {
    $routes->get('/', 'Home::index/$1');
    $routes->get('about', 'Home::page/$1/about');
    $routes->get('products', 'Home::page/$1/products');
    $routes->get('solutions', 'Home::page/$1/solutions');
    $routes->get('projects', 'Home::page/$1/projects');
    $routes->get('sustainability', 'Home::page/$1/sustainability');
    $routes->get('news', 'Home::page/$1/news');
    $routes->get('contact', 'Home::page/$1/contact');
});

$routes->group('admin', ['filter' => 'session'], static function ($routes) {
    $routes->get('/', 'Admin\DashboardController::index', [
        'filter' => 'permission:dashboard.view',
    ]);

    $routes->get('pages', 'Admin\PagesController::index', [
        'filter' => 'permission:pages.view',
    ]);

    $routes->match(['get', 'post'], 'pages/create', 'Admin\PagesController::create', [
        'filter' => 'permission:pages.create',
    ]);

    $routes->match(['get', 'post'], 'pages/edit/(:num)', 'Admin\PagesController::edit/$1', [
        'filter' => 'permission:pages.update',
    ]);

    $routes->post('pages/delete/(:num)', 'Admin\PagesController::delete/$1', [
        'filter' => 'permission:pages.delete',
    ]);

    $routes->post('pages/publish/(:num)', 'Admin\PagesController::publish/$1', [
        'filter' => 'permission:pages.publish',
    ]);
});
