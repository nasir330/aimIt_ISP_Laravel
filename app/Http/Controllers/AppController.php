<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AppController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
   
}
