<?php

namespace App\Http\Controllers\WEB;

class HomeController
{
    public static function home()
    {
        view('home');
    }

    public static function about(){
        view('about');
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
        view('user-dashboard/booking');
    }

    public static function services(){
        view('dashboard/services');
    }

    public static function reports(){
        view('dashboard/reports');
    }


    public static function overview(){
        view('user-dashboard/overview');
    }
    public static function appointments(){
        view('user-dashboard/appointments');
    }
    public static function rewards(){
        view('user-dashboard/rewards');
    }


}