<?php

use App\Http\Controllers\UserPerpusController;
use App\Http\Controllers\LoginController;
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
Route::get('/',[LoginController::class,'index']);
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/Authentication',[LoginController::class,'Authentication']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/',[LoginController::class,'Dashboard'])->middleware('auth');

//Route::get('/User',[UserPerpusController::class,'index']);
