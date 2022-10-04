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
Route::get('/', 'HomeController@homepage')->name('homepage');//richiamta dal controller


Route::resource('movies', 'MovieController');
//indichiamo l'URI di base e il Controller che gestisce tutte le rotte
