<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;

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

Route::get('admin', [AuthController::class, 'index'])->name('auth.admin');
Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('dashboard');
Route::get('user/index', [UserController::class, 'index'])->name('user.index')->middleware('dashboard');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('user/register', [UserController::class, 'register'])->name('user.register');
Route::post('user/update', [UserController::class, 'update'])->name('user.update');
Route::get('user/delete', [UserController::class, 'deleteById'])->name('user.delete');
