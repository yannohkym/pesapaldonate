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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/donation/new', [App\Http\Controllers\DonationController::class, 'new'])->name('new_donation');
Route::get('/donation/payment-callback/{id}', [App\Http\Controllers\DonationController::class, 'callback'])->name('donation_callback');
Route::get('/donation/pay/{id}', [App\Http\Controllers\DonationController::class, 'pay'])->name('donation_pay');


