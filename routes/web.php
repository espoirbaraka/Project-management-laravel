<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\BailleurController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\ParticipationController;


Route::post('/save', [MainController::class, 'save'])->name('auth.pages.save');
Route::post('/check', [MainController::class, 'check'])->name('auth.pages.check');
Route::get('/logout', [MainController::class, 'logout'])->name('auth.pages.logout');

Route::group(['middleware'=>['AuthCheck']], function (){
    Route::get('/', [MainController::class, 'login'])->name('auth.pages.login');
    Route::get('/register', [MainController::class, 'register'])->name('auth.pages.register');
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

    Route::get('/projet/create', [ProjetController::class, 'create']);
    Route::get('/projet/invitation', [ProjetController::class, 'invitation']);
    Route::get('/projet/participation', [ProjetController::class, 'participation']);
    Route::get('/projet/detail/{id}', [ProjetController::class, 'detail']);
    Route::post('/projet/update', [ProjetController::class, 'update']);
    Route::get('/projet/update/{id}', [ProjetController::class, 'edit']);
    Route::get('/projet/list/{user}', [ProjetController::class, 'projetbyuser'])->name('projetbyuser');
    Route::get('/projet/list', [ProjetController::class, 'index'])->name('projets');
    Route::post('/projet/save', [ProjetController::class, 'store']);
    Route::post('/projet/demarrer', [ProjetController::class, 'demarrer']);
    Route::post('/projet/achever', [ProjetController::class, 'achever']);

    Route::get('/tache/create/{projet}', [TacheController::class, 'create'])->name('newtache');
    Route::post('/tache/save', [TacheController::class, 'store']);
    Route::get('/tache/list/{projet}', [TacheController::class, 'tachebyprojet'])->name('tachebyprojet');
    Route::post('/tache/demarrer', [TacheController::class, 'demarrer']);
    Route::post('/tache/achever', [TacheController::class, 'achever']);

    Route::get('/participation/create/{projet}', [ParticipationController::class, 'create'])->name('newtache');
    Route::post('/participation/save', [ParticipationController::class, 'store']);
    Route::get('/participation/list/{projet}', [ParticipationController::class, 'tachebyprojet'])->name('tachebyprojet');

    Route::get('/bailleur/create/{projet}', [BailleurController::class, 'create'])->name('newbailleur');
    Route::post('/bailleur/save', [BailleurController::class, 'store']);
    Route::get('/bailleur/list/{projet}', [BailleurController::class, 'bailleurbyprojet'])->name('bailleurbyprojet');
});
