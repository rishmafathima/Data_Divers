<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShippingController;

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
    return view('dashboard');
});

Route::get('/dbconnect', function(){
    return view('dbconnect');
});

Route::get('/layout', function(){
    return view('layout');
});

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}/destroy', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/auth/registration', [AuthController::class, 'registration'])->name('auth.registration');
Route::post('/auth', [AuthController::class, 'store'])->name('auth.store');
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');

Route::get('/logistics', [ShippingController::class, 'index'])->name('logistics.index');
Route::get('/logistics/create', [ShippingController::class, 'create'])->name('logistics.create');
Route::post('/logistics', [ShippingController::class, 'store'])->name('logistics.store');
Route::get('/logistics/{logistics}/edit', [ShippingController::class, 'edit'])->name('logistics.edit');
Route::put('/logistics/{logistics}/update', [ShippingController::class, 'update'])->name('logistics.update');
Route::delete('/logistics/{logistics}/destroy', [ShippingController::class, 'destroy'])->name('logistics.destroy');

Route::resource("/logistics", ShippingController::class);