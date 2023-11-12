<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [UserRegisterController::class, 'showRegisterPage'])->name('register');
Route::post('register', [UserRegisterController::class, 'getValidateData']);
Route::get('login', [UserLoginController::class, 'showLogInPage'])->name('login');
Route::post('login', [UserLoginController::class, 'getValidateData']);
Route::get('profile', function () {
    return view('info');
})->name('profile');
