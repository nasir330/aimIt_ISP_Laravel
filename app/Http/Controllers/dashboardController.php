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
    public function userreport()
    {
        return view('support.report');
    }
    //services menu
    public function servicesmenu()
    {
        return view('services.menu');
    }
    //manager menu
    public function managermenu()
    {
        return view('managers.menu');
    }
    public function createmanager()
    {
        return view('managers.form');
    }
    public function managerslist()
    {
        return view('managers.list');
    }
    public function manageredit()
    {
        return view('managers.edit');
    }
    //nas menu
    public function nasmenu()
    {
        return view('nas.menu');
    }
    public function createnas()
    {
        return view('nas.form');
    }
    public function naslist()
    {
        return view('nas.list');
    }
    public function nasedit()
    {
        return view('nas.edit');
    }
    //router menu
    public function routermenu()
    {
        return view('routers.menu');
    }
    public function addrouter()
    {
        return view('routers.form');
    }
    public function routerslist()
    {
        return view('routers.list');
    }
    //reports
    public function reports()
    {
        return view('reports.menu');
    }
    //reports
    public function expensemenu()
    {
        return view('expenses.menu');
    }
    public function expenseCategory()
    {
        return view('expenses.category');
    }
    public function addexpense()
    {
        return view('expenses.form');
    }
    public function expenselist()
    {
        return view('expenses.list');
    }

    //reports
    public function inventorymenu()
    {
        return view('inventory.menu');
    }
    public function createasset()
    {
        return view('inventory.form');
    }
    public function assetlist()
    {
        return view('inventory.list');
    }
    public function assetedit()
    {
        return view('inventory.edit');
    }
    //radiuslog
    public function logmenu()
    {
        return view('logs.menu');
    }
    public function radiuslog()
    {
        return view('logs.radius');
    }
    public function mysqllog()
    {
        return view('logs.mysql');
    }
    public function nginxlog()
    {
        return view('logs.nginx');
    }
    public function serverlog()
    {
        return view('logs.server');
    }
}
