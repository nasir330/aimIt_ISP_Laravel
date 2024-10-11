<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('base');
    }

    //user menu
    public function usermenu()
    {
        return view('users.menu');
    }
    public function createuser()
    {
        return view('users.form');
    }
    public function userslist()
    {
        return view('users.list');
    }
    public function usersedit()
    {
        return view('users.edit');
    }

    //tickets menu
    public function ticketsmenu()
    {
        return view('tickets.menu');
    }
    public function createtickets()
    {
        return view('tickets.form');
    }
    public function ticketslist()
    {
        return view('tickets.list');
    }
    public function ticketslistview()
    {
        return view('tickets.details');
    }
    //package menu
    public function packagemenu()
    {
        return view('packages.menu');
    }
    public function createpackage()
    {
        return view('packages.form');
    }

    public function packagelist()
    {
        return view('packages.list');
    }
    //support menu
    public function supportmenu()
    {
        return view('support.menu');
    }
    public function supportsearch()
    {
        return view('support.search');
    }
}
