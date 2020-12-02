<?php

require_once 'vendor/autoload.php';

use app\components\Router;

// FRONT CONTROLLER

// General settings
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// Connecting system files
define('ROOT', __DIR__);

// Call Router
$router = new Router();
$router->run();
