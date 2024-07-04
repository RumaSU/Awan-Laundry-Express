<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\myAccountController;
use App\Http\Controllers\User\myPromoController;
use App\Http\Controllers\User\myTransactionController;
use App\Http\Controllers\User\Settings;
use App\Http\Controllers\Store;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPWController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use App\Models\UserRegister;
use Illuminate\Support\Str;
use App\Http\Controllers\ResetPasswordController;


use App\Http\Controllers\tubesController;
use App\Http\Controllers\User\SettingAccountController;
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
Route::fallback(function () {
    // Mengarahkan ke halaman homepage
    return redirect('/');
});

Route::get('/tubes', [tubesController::class, 'index']);
Route::get('/tubes2', [tubesController::class, 'index2']);
Route::get('/find-route', [tubesController::class, 'findRoute']);

Route::view('/page/promo', 'pages.guests.promo.index');

Route::get('/', function() {
    if (Auth::check()) {
        return view('pages.users.homepage.index');
    } else {
        return view('pages.guests.homepage.index');
    }
})->name('home');

Route::middleware('guest')->group(function() {
    // Route::get('/', function () {
    //     return view('pages.guests.homepage.index');
    // });
    // Route::view('/', 'pages.guests.homepage.index');
    Route::get('/login', [UserController::class, 'loginView'])->name('loginIndex');
    Route::post('/login', [UserController::class, 'login'])->name('loginPost');
    Route::get('/register', [UserController::class, 'registerView'])->name('registerIndex');
    Route::post('/register', [UserController::class, 'register'])->name('registerPost');
});
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


Route::middleware('auth')->group(function() {
    // Route::view('/', 'pages.users.homepage.index');
    Route::get('/user/account', [myAccountController::class, 'index'])->name('user\myAccount');
    Route::get('/user/promo', [myPromoController::class, 'index'])->name('user\myPromo');
    Route::view('/user/notification', 'pages.users.notifikasi.index')->name('user\notification');
    Route::view('/user/coba', 'pages.users.homepage.coba')->name('user\coba');
    Route::get('/user/transaction', [myTransactionController::class, 'index'])->name('user\myTransaction');
    Route::get('/user/settings', [SettingAccountController::class, 'index'])->name('user\settings');
    Route::get('/user/settings/profile', [Settings\ProfileAccountController::class, 'index'])->name('user\settings\profile');
    Route::post('/user/settings/profile/name', [Settings\ProfileAccountController::class, 'changeName'])->name('user\settings\profile\name');
    Route::post('/user/settings/profile/gender', [Settings\ProfileAccountController::class, 'changeGender'])->name('user\settings\profile\gender');
    Route::post('/user/settings/profile/birth', [Settings\ProfileAccountController::class, 'changeBirth'])->name('user\settings\profile\birth');
    Route::post('/user/settings/profile/email', [Settings\ProfileAccountController::class, ''])->name('user\settings\profile\email');
    Route::post('/user/settings/profile/telp', [Settings\ProfileAccountController::class, 'changeTelp'])->name('user\settings\profile\telp');
    Route::get('/user/settings/address', [Settings\AddressAccountController::class, 'index'])->name('user\settings\address');
    Route::post('/user/settings/address/save', [Settings\AddressAccountController::class, 'saveAddress'])->name('user\settings\address\save');
    Route::get('/user/settings/password', [Settings\PasswordAccountController::class, 'index'])->name('user\settings\password');
    
    
    // Route::view('/user/account', 'pages.users.myAccount.index');
    
    Route::middleware('access.store')->group(function() {
        Route::get('/store/mystore', [Store\myStoreController::class, 'index'])->name('store\myStore');
        Route::get('/store/orders', [Store\storeOrdersController::class, 'index'])->name('store\orders');
        Route::get('/store/promo', [Store\storePromoController::class, 'index'])->name('store\promo');
        
        Route::get('/store/services', [Store\storeServicesController::class, 'index'])->name('store\services');
        Route::post('/store/services/kilos', [Store\storeServicesController::class, 'saveServiceKilos'])->name('store\services\kilos');
        Route::post('/store/services/units', [Store\storeServicesController::class, 'saveServiceUnits'])->name('store\services\units');
        
        Route::get('/store/maps', [Store\storeMapsController::class, 'index'])->name('store/maps');
        Route::get('/store/notification', [Store\storeNotificationController::class, 'index'])->name('store\notification');
        Route::get('/store/settings', [Store\storeSettingsController::class, 'index'])->name('store\settings');
    });
    
    Route::post('/user/createStore', [UserController::class, 'createStore'])->name('user\createStore');
    
    Route::get('/logout', [UserController::class, 'logout'])->name('user\logout');
});



Route::get('/about/kebijakan-privasi', [AboutKebijakanController::class, 'index'])->name('about/privasi');
Route::get('/about/syarat-ketentuan', [AboutSyaratController::class, 'index'])->name('about/syarat-ketentuan');
Route::get('/about/pusat-bantuan', [AboutBantuanController::class, 'index'])->name('about/pusat-bantuan');
Route::get('/about/faq', [AboutFaqController::class, 'index'])->name('about/faq');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
