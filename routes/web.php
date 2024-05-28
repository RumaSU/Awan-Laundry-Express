<?php

use App\Http\Controllers\User\myAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPWController;




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

Route::get('/login', [LoginController::class, 'loginIndex'])->name('loginIndex');
Route::post('/login', [LoginController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [RegisterController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/lupa_password', [ForgotPWController::class, 'forgotindex'])->name('forgot_password');

Route::view('/user/homepage', 'pages.users.homepage.index');
Route::get('/user/account', [myAccountController::class, 'index'])->name('user\myAccount');
Route::view('/user/notifikasi', 'pages.users.notifikasi.index');
// Route::view('/user/account', 'pages.users.myAccount.index');

