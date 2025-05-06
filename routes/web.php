<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\dashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });
Route::get('/',[AppController::class,'index'])->name('base');
Route::get('/login',[AppController::class,'login'])->name('login');
Route::get('/register',[AppController::class,'register'])->name('register');
Route::post('/dashboard',[dashboardController::class,'index'])->name('dashboard');

//User Menu
Route::get('/usermenu',[dashboardController::class,'usermenu'])->name('usermenu');
Route::get('/createuser',[dashboardController::class,'createuser'])->name('createuser');
Route::get('/userslist',[dashboardController::class,'userslist'])->name('userslist');
Route::post('/usersedit',[dashboardController::class,'usersedit'])->name('usersedit');

//Ticket Menu
Route::get('/ticketsmenu',[dashboardController::class,'ticketsmenu'])->name('ticketsmenu');
Route::get('/createtickets',[dashboardController::class,'createtickets'])->name('createtickets');
Route::get('/ticketslist',[dashboardController::class,'ticketslist'])->name('ticketslist');
Route::post('/ticketslistview',[dashboardController::class,'ticketslistview'])->name('ticketslistview');

//package Menu
Route::get('/packagemenu',[dashboardController::class,'packagemenu'])->name('packagemenu');
Route::get('/createpackage',[dashboardController::class,'createpackage'])->name('createpackage');
Route::get('/packagelist',[dashboardController::class,'packagelist'])->name('packagelist');
Route::post('/ticketslistview',[dashboardController::class,'ticketslistview'])->name('ticketslistview');

//support Menu
Route::get('/supportmenu',[dashboardController::class,'supportmenu'])->name('supportmenu');
Route::get('/supportsearch',[dashboardController::class,'supportsearch'])->name('supportsearch');
Route::get('/userreport',[dashboardController::class,'userreport'])->name('userreport');

//services Menu
Route::get('/servicesmenu',[dashboardController::class,'servicesmenu'])->name('servicesmenu');

//manager Menu
Route::get('/managermenu',[dashboardController::class,'managermenu'])->name('managermenu');
Route::get('/createmanager',[dashboardController::class,'createmanager'])->name('createmanager');
Route::get('/managerslist',[dashboardController::class,'managerslist'])->name('managerslist');
Route::post('/manageredit',[dashboardController::class,'manageredit'])->name('manageredit');

//nas Menu
Route::get('/nasmenu',[dashboardController::class,'nasmenu'])->name('nasmenu');
Route::get('/createnas',[dashboardController::class,'createnas'])->name('createnas');
Route::get('/naslist',[dashboardController::class,'naslist'])->name('naslist');
Route::post('/nasedit',[dashboardController::class,'nasedit'])->name('nasedit');

//router Menu
Route::get('/routermenu',[dashboardController::class,'routermenu'])->name('routermenu');
Route::get('/addrouter',[dashboardController::class,'addrouter'])->name('addrouter');
Route::get('/routerslist',[dashboardController::class,'routerslist'])->name('routerslist');

//reports 
Route::get('/reports',[dashboardController::class,'reports'])->name('reports');

//expense menu 
Route::get('/expensemenu',[dashboardController::class,'expensemenu'])->name('expensemenu');
Route::get('/expense-category',[dashboardController::class,'expenseCategory'])->name('expenseCategory');
Route::get('/addexpense',[dashboardController::class,'addexpense'])->name('addexpense');
Route::get('/expenselist',[dashboardController::class,'expenselist'])->name('expenselist');

//inventorymenu 
Route::get('/inventorymenu',[dashboardController::class,'inventorymenu'])->name('inventorymenu');
Route::get('/createasset',[dashboardController::class,'createasset'])->name('createasset');
Route::get('/assetlist',[dashboardController::class,'assetlist'])->name('assetlist');
Route::get('/assetedit',[dashboardController::class,'assetedit'])->name('assetedit');

//radiuslog 
Route::get('/logmenu',[dashboardController::class,'logmenu'])->name('logmenu');
Route::get('/radiuslog',[dashboardController::class,'radiuslog'])->name('radiuslog');
Route::get('/mysqllog',[dashboardController::class,'mysqllog'])->name('mysqllog');
Route::get('/nginxlog',[dashboardController::class,'nginxlog'])->name('nginxlog');
Route::get('/serverlog',[dashboardController::class,'serverlog'])->name('serverlog');



require __DIR__.'/auth.php';
