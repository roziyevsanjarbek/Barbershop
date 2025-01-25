<?php

namespace App\Http\Controllers\WEB;

class UserController
{
    public static function register(){
        view('auth/register');
    }
    public static function login(){
        view('auth/login');
    }

}