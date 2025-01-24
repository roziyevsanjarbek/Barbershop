<?php

namespace Src\middlewares;

use Src\middlewares\Middleware;




class AuthMiddleWares implements Middleware{
    public function handle(): void
    {
        \Src\Auth::check();
    }
}