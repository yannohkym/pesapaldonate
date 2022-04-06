<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/n',[App\Http\Controllers\donationscontroller::class,'index'])->name('donations.index');
Route::get('/create',[App\Http\Controllers\donationscontroller::class,'createdonor'])->name('donations.createdonor');
Route::post('/store',[App\Http\Controllers\donationscontroller::class,'storedonor'])->name('donations.storedonor');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


