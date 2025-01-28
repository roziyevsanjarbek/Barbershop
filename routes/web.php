<?php

use App\Http\Controllers\WEB\HomeController;

use App\Http\Controllers\WEB\UserController;
use Src\Router;


Router::get('/', [HomeController::class, 'home']);
Router::get('/about', [HomeController::class, 'about']);

Router::get('/register', [UserController::class, 'register']);
Router::get('/login', [UserController::class, 'login']);

// Admin
Router::get('/dashboard', [HomeController::class, 'dashboard']);
Router::get('/dashboard/customer', [HomeController::class, 'customer']);
Router::get('/dashboard/booking', [HomeController::class, 'booking']);
Router::get('/dashboard/services', [HomeController::class, 'services']);
Router::get('/dashboard/reports', [HomeController::class, 'reports']);

//Users

Router::get('/dashboard/overview', [HomeController::class, 'overview']);
Router::get('/dashboard/appointments', [HomeController::class, 'appointments']);
Router::get('/dashboard/rewards', [HomeController::class, 'rewards']);
Router::get('/dashboard/styles', [HomeController::class, 'styles']);



Router::notFound();
