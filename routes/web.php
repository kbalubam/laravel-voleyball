<?php

use App\Http\Controllers\EquipeController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [EquipeController::class, 'index'])->name('homeE');

Route::get('/equipe/create',[EquipeController::class, 'create'])->name('create');

Route::post('/equipe', [EquipeController::class, 'store'])->name('storeE');

Route::get('/equipe/{id}/show',[EquipeController::class,'show'])->name('showE');


