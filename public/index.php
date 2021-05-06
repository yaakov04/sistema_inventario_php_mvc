<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../libs/app.php';

use MVC\Router;
use Controllers\Main;

$router= new Router();
$router->get('/', [Main::class,'main']);
$router->get('/registrar', [Main::class,'registrar_producto']);
$router->comprobarRutas();