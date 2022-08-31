<?php

use App\Http\Controllers\UserPerpusController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route Home
Route::get('/', function() {return view('home');});

// Route Login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/Authentication',[LoginController::class,'Authentication']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//Route CRUD pake prefix
Route::prefix('admin')->group(function () {
        Route::get('/',[LoginController::class,'Dashboard'])->name('Dashboard')->middleware('auth');
        Route::get('/adduser',[UserController::class,'adduser'])->name('adduser')->middleware('auth');
        Route::post('/prosescreate',[UserController::class,'prosescreate'])->name('prosescreate')->middleware('auth');
        Route::get('/edituser/{id}',[UserController::class,'edituser'])->name('edituser')->middleware('auth');
        Route::post('/{id}/prosesupdate',[UserController::class,'prosesupdate'])->name('prosesupdate')->middleware('auth');
        Route::get('/destroy',[UserController::class,'deleteuser'])->name('deleteuser')->name('deleteuser')->middleware('auth');
});




