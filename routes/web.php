<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjetController;

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

Route::post('/save', [MainController::class, 'save'])->name('auth.pages.save');
Route::post('/check', [MainController::class, 'check'])->name('auth.pages.check');
Route::get('/logout', [MainController::class, 'logout'])->name('auth.pages.logout');

Route::group(['middleware'=>['AuthCheck']], function (){
    Route::get('/', [MainController::class, 'login'])->name('auth.pages.login');
    Route::get('/register', [MainController::class, 'register'])->name('auth.pages.register');
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

    Route::get('/newprojet', [ProjetController::class, 'newprojet'])->name('newprojet');
    Route::get('/projets', [ProjetController::class, 'projets'])->name('projets');
});
