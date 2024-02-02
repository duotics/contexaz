<?php
//Paths server
define('rootM', $rootM . '/'); //Main Folder App, init.php file is set
define('root', array(
    'd' => rootM . 'data/',
    'm' => rootM . 'modules/',
    'c' => rootM . 'configs/',
    't' => rootM . 'templates/',
    'a' => rootM . 'resources/assets/',
    'i' => rootM . 'resources/images'
));
//Paths url
define('routeM', $_ENV['APP_URL']); //Main Main URL App, defined in .env
define('route', array(
    'd' => routeM . 'data/',
    'm' => routeM . 'modules/',
    'c' => routeM . 'configs/',
    't' => routeM . 'frames/',
    'a' => routeM . 'resources/assets/',
    'i' => routeM . 'resources/images'
));
$route = route;
