<?php

use App\Models\User;

use App\Http\Controllers\API\UserController;

use Src\Router;

;
Router::post('/api/register', [UserController::class, 'register']);
Router::post('/api/login', [UserController::class, 'login']);


