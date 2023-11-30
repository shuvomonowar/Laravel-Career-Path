<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileEditController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SinglePostController;
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

Route::get('register', [RegisterController::class, 'showRegisterPage'])->name('register');
Route::post('register', [RegisterController::class, 'storeRegisterData']);
Route::get('login', [LoginController::class, 'showLogInPage'])->name('login');
Route::post('login', [LoginController::class, 'getUserData']);
Route::get('profile',[ProfileController::class, 'showProfile'])->name('profile');
Route::get('profile/edit-profile', [ProfileEditController::class, 'getProfileEdit'])->name('profile/edit-profile');
Route::post('profile/edit-profile', [ProfileEditController::class, 'saveProfileEdit']);
Route::get('single-post', [SinglePostController::class, 'showSinglePost'])->name('single-post');
