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
Route::get('/donation/show',[App\Http\Controllers\DonationController::class,'show'])->name('show');
Route::get('/donation/donors',[App\Http\Controllers\DonationController::class,'getdonor'])->name('getdonor');
Route::get('/donation/payment-callback/{id}', [App\Http\Controllers\DonationController::class, 'callback'])->name('donation_callback');
Route::get('/donation/pay/{id}', [App\Http\Controllers\DonationController::class, 'pay'])->name('donation_pay');

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin',[App\Http\Controllers\AdministratorController::class,'index'])->name('admin_index');
    Route::get('/admin/donors',[App\Http\Controllers\AdministratorController::class,'donors'])->name('admin_donors');
    Route::get('/admin/notifications',[App\Http\Controllers\AdministratorController::class,'notifications'])->name('admin_notifications');
    Route::get('/admin/users',[App\Http\Controllers\AdministratorController::class,'users'])->name('admin_users');
    Route::match(['get','post'],'/admin/configuration',[App\Http\Controllers\AdministratorController::class,'config'])->name('configuration');
});




