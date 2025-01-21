<?php

use App\Models\User;

use App\Http\Controllers\API\UserController;

use Src\Router;

;
Router::post('/api/store', [UserController::class, 'store']);


