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

Route::controller(ProblemaController::class)->group(function (){
    Route::get('/dashboardAnalst/create','create')->name('create-data-problem');
    Route::get('/dashboardAnalst/index','index')->name('show-list');
    Route::post('/dashboardAnalst/save','store')->name('store-data-problem');
    Route::delete('/dashboardAnalst/{id}','destroy')->name('delete-data-problem');
});


Route::controller(EstadoController::class)->group(function (){
    Route::get('/state/create')->name('create-data-state');
    Route::get('/state/index')->name('show-list-state');
    Route::post('/state/save')->name('store-data-state');
   
});




