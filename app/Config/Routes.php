<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pelanggan;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('pelanggan', [Pelanggan::class, 'index']);
