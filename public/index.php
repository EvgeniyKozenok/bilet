<?php

define('DS', DIRECTORY_SEPARATOR);

use App\Application;

require_once '..' . DS .'src' . DS .'Autoloader.php';

Autoloader::addNamespacePath('App', '..' . DS . 'src');

$app = new Application();
$app->start();