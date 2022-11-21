<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Models\User;

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

Route::get('/', [CustomAuthController::class, 'home']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::get('home', [CustomAuthController::class, 'home'])->name('log-in');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'sign0ut'])->name('signout');
Route::get('logout', [CustomAuthController::class, 'sign0ut'])->name('logout');

//Route::get('admin', [CustomAuthController::class, 'admin'])->name('admin');

// USER MANAGEMENT
Route::get('admin', [CustomAuthController::class, 'index'])->name('admin');
Route::get('admin', [CustomAuthController::class, 'index']);
Route::get('admin', [CustomAuthController::class, 'getUsers'])->name('admin');
Route::post('postAdd', [CustomAuthController::class, 'addSave'])->name('postAdd');
Route::DELETE('/delete/{id}', [CustomAuthController::class, 'destroy'])->name('delete');
Route::PUT('/update/{id}', [CustomAuthController::class, 'update'])->name('update');

Route::get('role', [CustomAuthController::class, 'roleIndex'])->name('role');
Route::get('role', [CustomAuthController::class, 'roleIndex']);
Route::get('role', [CustomAuthController::class, 'getRole'])->name('role');
Route::PUT('/changeRole/{id}', [CustomAuthController::class, 'editRole'])->name('changeRole');
