<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\myAccountController;
use App\Http\Controllers\User\myPromoController;
use App\Http\Controllers\User\myTransactionController;
use App\Http\Controllers\Store\myStoreController;
use App\Http\Controllers\Store\storeOrdersController;
use App\Http\Controllers\Store\storePromoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPWController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use App\Models\UserRegister;
use Illuminate\Support\Str;
use App\Http\Controllers\ResetPasswordController;


use App\Http\Controllers\tubesController;
use App\Http\Controllers\User\SettingAccountController;
use App\Http\Controllers\Store\StoreMapsController;
use App\Http\Controllers\About\AboutKebijakanController;
use App\Http\Controllers\About\AboutSyaratController;
use App\Http\Controllers\About\AboutBantuanController;
use App\Http\Controllers\About\AboutFaqController;
use App\Http\Controllers\About\AboutUsController;


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
Route::get('/tubes', [tubesController::class, 'index']);
Route::get('/find-route', [tubesController::class, 'findRoute']);

Route::get('/', function () {
    return view('pages.guests.homepage.index');
});
Route::view('/page/promo', 'pages.guests.promo.index');

Route::get('/login', [LoginController::class, 'loginIndex'])->name('loginIndex');
Route::post('/login', [LoginController::class, 'loginPost'])->name('loginPost');
Route::get('/register', [RegisterController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('registerPost');
Route::get('/forgotPassword', [ForgotPWController::class, 'forgotindex'])->name('forgot_password');
Route::view('/forgotToken', 'login.passwordToken');
// Route::post('/forgotPassword', function (Request $request) {
//     return 'bisa kirim';
// })->middleware('guest')->name('password.email');

Route::post('/forgotPassword', [ForgotPWController::class, 'sendResetLinkEmail'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/resetPassword/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/resetPassword', [ResetPasswordController::class, 'reset'])
    ->middleware('guest')
    ->name('password.update');

Route::view('/user/homepage', 'pages.users.homepage.index');
Route::get('/user/account', [myAccountController::class, 'index'])->name('user\myAccount');
Route::get('/user/promo', [myPromoController::class, 'index'])->name('user\myPromo');
Route::view('/user/notification', 'pages.users.notifikasi.index')->name('user\notification');
Route::view('/user/coba', 'pages.users.homepage.coba')->name('user\coba');
Route::get('/user/transaction', [myTransactionController::class, 'index'])->name('user\myTransaction');
Route::get('/pages/users/settingaccount', [SettingAccountController::class, 'index'])->name('settingaccount.index');
// Route::view('/user/account', 'pages.users.myAccount.index');

Route::view('/store/notification', 'pages.stores.notifikasi.index');
Route::view('/store/setting', 'pages.stores.settingAccount.index');

Route::get('/store/mystore', [myStoreController::class, 'index'])->name('store\myStore');
Route::get('/store/orders', [storeOrdersController::class, 'index'])->name('store\orders');
Route::get('/store/promo', [storePromoController::class, 'index'])->name('store\promo');
Route::get('/store/maps', [storeMapsController::class, 'index'])->name('store/maps');



Route::get('/about/kebijakan-privasi', [AboutKebijakanController::class, 'index'])->name('about/privasi');
Route::get('/about/syarat-ketentuan', [AboutSyaratController::class, 'index'])->name('about/syarat-ketentuan');
Route::get('/about/pusat-bantuan', [AboutBantuanController::class, 'index'])->name('about/pusat-bantuan');
Route::get('/about/faq', [AboutFaqController::class, 'index'])->name('about/faq');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
