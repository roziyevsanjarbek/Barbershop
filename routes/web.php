<?php

use App\Http\Controllers\WEB\HomeController;

use App\Http\Controllers\WEB\UserController;
use Src\Router;


Router::get('/', [HomeController::class, 'home']);

Router::get('/register', [UserController::class, 'register']);
Router::get('/login', [UserController::class, 'login']);


Router::get('/dashboard', [HomeController::class, 'dashboard']);
Router::get('/dashboard/customer', [HomeController::class, 'customer']);
Router::get('/dashboard/booking', [HomeController::class, 'booking']);
Router::get('/dashboard/services', [HomeController::class, 'services']);
