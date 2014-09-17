<?php
define('DOMAIN', $_SERVER['DOCUMENT_ROOT'] . "Restfull/domain" );
//spl_autoload_register(); // don't load our classes unless we use them

require_once 'core/RestServer.php';
require_once 'controller/LoginController.php';
//adding controller classes to classpath



$mode = 'debug'; // 'debug' or 'production'
$server = new RestServer($mode);
$server->refreshCache(); // uncomment momentarily to clear the cache if classes change in production mode

$server->addClass(new LoginController());
//$server->addClass('ProductsController', '/products'); // adds this as a base to all the URLs in this class

$server->handle();