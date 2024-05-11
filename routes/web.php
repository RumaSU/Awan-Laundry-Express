<?php

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
    return view('pages.homepage.index');
});

<<<<<<< HEAD
Route::get('/login', [LoginController::class, 'loginIndex'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/lupa_password', [ForgotPWController::class, 'forgotindex'])->name('forgot_password');

=======
Route::view('/user/account', 'pages.users.myAccount.index');
>>>>>>> f407b5d60b3d19e794b95dde0888983435e41424
