<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\myAccountController;
use App\Http\Controllers\User\myPromoController;
use App\Http\Controllers\User\myTransactionController;
use App\Http\Controllers\store\myStoreController;
use App\Http\Controllers\store\storeOrdersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPWController;
use App\Http\Controllers\SettingAccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('pages.guests.homepage.index');
});
Route::view('/page/promo', 'pages.guests.promo.index');

Route::get('/login', [LoginController::class, 'loginIndex'])->name('loginIndex');
Route::post('/login', [LoginController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [RegisterController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/forgot_password', [ForgotPWController::class, 'forgotindex'])->name('forgot_password');

Route::view('/user/homepage', 'pages.users.homepage.index');
Route::get('/user/account', [myAccountController::class, 'index'])->name('user\myAccount');
Route::get('/user/promo', [myPromoController::class, 'index'])->name('user\myPromo');
Route::view('/user/notification', 'pages.users.notifikasi.index')->name('user\notification');
Route::view('/user/coba', 'pages.users.homepage.coba')->name('user\coba');
Route::get('/user/transaction', [myTransactionController::class, 'index'])->name('user\myTransaction');
Route::get('/pages/users/settingaccount', [SettingAccountController::class, 'index'])->name('settingaccount.index');
// Route::view('/user/account', 'pages.users.myAccount.index');

Route::view('/store/notification', 'pages.stores.notifikasi.index');
Route::view('/store/setting', 'pages.stores.pengaturan.index');

Route::get('/store/mystore', [myStoreController::class, 'index'])->name('store\myStore');
Route::get('/store/orders', [storeOrdersController::class, 'index'])->name('store\orders');

