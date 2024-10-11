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
Route::get('/packagelist',[dashboardController::class,'packagelist'])->name('packagelist');
Route::post('/ticketslistview',[dashboardController::class,'ticketslistview'])->name('ticketslistview');

require __DIR__.'/auth.php';
