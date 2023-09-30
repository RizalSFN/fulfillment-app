<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
    return view('login', [
        "title" => "Login"
    ]);
})->name('utama');
Route::post('/login', [LoginController::class, 'validasi'])->name('login');
Route::get('/use', [UserController::class, 'showAll'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
})->name('dashboard');
Route::get('/users', [UserController::class, 'showAll'])->name('users');
