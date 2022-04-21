<?php
require_once __DIR__ . '/../includes/app.php';

use Controllers\PagesController;
use MVC\Router;

$router = new Router;

#=============================================================================
# Endpoint pages
#=============================================================================
$router->get('/',[PagesController::class,'home']);
$router->get('/aboutUs',[PagesController::class,'aboutUs']);
$router->get('/services',[PagesController::class,'services']);
$router->get('/contact',[PagesController::class,'contact']);
$router->post('/contact',[PagesController::class,'contact']);
$router->get('/blog',[PagesController::class,'blog']);
$router->get('/blogger',[PagesController::class,'blogger']);
$router->get('/notFound',[PagesController::class,'notFound']);
#=============================================================================



$router->verifyRoutes();