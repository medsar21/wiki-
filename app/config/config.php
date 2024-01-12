<?php
// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db_wiki');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost/wiki-/');

// Site Name
define('SITENAME', 'wikis');

// Autoload Core Libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});

// Instantiate Core Class
$init = new Core();


error_reporting(E_ALL);
ini_set('display_errors', '1');
