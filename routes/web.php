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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\TodoController@index');
Route::get('/create', 'App\Http\Controllers\TodoController@create');
Route::post('/store', 'App\Http\Controllers\TodoController@store');
Route::post('/delete/{id}', 'App\Http\Controllers\TodoController@delete');
Route::get('/show/{id}', 'App\Http\Controllers\TodoController@show');
Route::get('/edit/{id}', 'App\Http\Controllers\TodoController@edit');
Route::post('/edit/{id}', 'App\Http\Controllers\TodoController@update');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');