<?php

session_start();

define('__DS', '/');
define('__ROOT', dirname(__DIR__));
define('__SRC', __ROOT . __DS . 'src');
define('__VIEWS', __SRC . __DS . 'view');
define('__UPLOAD', __DIR__ . __DS . 'uploads');

require __ROOT . __DS . 'autoloader.php';
require __ROOT . __DS . 'lib.php';
require __ROOT . __DS . 'web.php';

src\App\Route::init();