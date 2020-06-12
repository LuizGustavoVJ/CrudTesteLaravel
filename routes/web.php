<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route:: prefix('admin')->namespace('Admin')->group(function(){

    Route::prefix('questoes')->name('questoes.')->group(function(){

        Route::get('/create', 'QuestoesController@create')->name('create');
        Route::post('/store', 'QuestoesController@store')->name('store');
    });

    Route::prefix('teste')->name('teste.')->group(function(){

        Route::get('/create', 'TesteController@create')->name('create');
        Route::post('/store', 'TesteController@store')->name('store');
    });
    
});
