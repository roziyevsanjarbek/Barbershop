<?php

namespace App\Http\Controllers\WEB;

class HomeController
{
    public static function home()
    {
        view('home');
    }

    public static function dashboard()
    {
        view('dashboard/dashboard');
    }

    public static function customer()
    {
        view('dashboard/customers');
    }

    public static function booking(){
        view('dashboard/booking');
    }

    public static function services(){
        view('dashboard/services');
    }


}