<?php

use app\controllers\AuthController;
$router->get( '/registration', [ AuthController::class , 'register']);
$router->post('/registration',[AuthController::class,'register']);
$router->get('/login',[AuthController::class,'login']);
$router->post('/login',[AuthController::class,'login']);