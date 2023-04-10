<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalistaController;
use App\Http\Controllers\ProblemaController;
use App\Http\Controllers\EstadoController;
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
    return view('welcome');
});

Route::get('/dashboardAnalst/create', [ProblemaController::class,'create'])->name('create-data-problem');
Route::get('/dashboardAnalst/index', [ProblemaController::class,'index'])->name('show-list');
Route::post('/dashboardAnalst/save', [ProblemaController::class,'store'])->name('store-data-problem');


Route::get('/state/create', [EstadoController::class,'create'])->name('create-data-state');
Route::get('/state/index', [EstadoController::class,'index'])->name('show-list-state');
Route::post('/state/save', [EstadoController::class,'store'])->name('store-data-state');


