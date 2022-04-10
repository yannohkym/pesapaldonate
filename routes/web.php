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
    return view('home');
});
Route::get('/dash', function () {
    return view('admin_dash');
});
Route::get('/admin', function () {
    return view('admin_login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/donation/new', [App\Http\Controllers\DonationController::class, 'new'])->name('new_donation');
Route::get('/donation/show',[App\Http\Controllers\DonationController::class,'show'])->name('show');
Route::get('/donation/donors',[App\Http\Controllers\DonationController::class,'getdonor'])->name('getdonor');



