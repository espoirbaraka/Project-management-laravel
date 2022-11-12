<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'login'])->name('auth.pages.login');

Route::get('/register', [MainController::class, 'register'])->name('auth.pages.register');

Route::get('/save', [MainController::class, 'save'])->name('auth.pages.save');


Route::get('/dashboard', function () {
    return view('dashboard');
});
