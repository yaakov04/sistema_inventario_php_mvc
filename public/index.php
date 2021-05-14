<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../libs/app.php';

use MVC\Router;
use Controllers\Main;

$router= new Router();
$router->get('/', [Main::class,'main']);
$router->get('/agregar', [Main::class,'agregar']);
$router->post('/agregar', [Main::class,'agregar']);
$router->get('/editar', [Main::class,'editar']);
$router->post('/editar', [Main::class,'editar']);
$router->post('/eliminar', [Main::class,'eliminar']);
$router->comprobarRutas();