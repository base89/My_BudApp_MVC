<?php

/**
 * Front controller
 *
 * PHP version 8.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Login', 'action' => 'new']);
$router->add('home', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');