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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home/create', 'UserController@create')->name('home.create');
Route::post('/home/create', 'UserController@store');
Route::get('/home/user/edit/{id}', 'UserController@edit')->name('home.edit');
Route::post('/home/user/edit/{id}', 'UserController@update');
Route::get('/home/delete/{id}', 'UserController@delete');
Route::post('/home/delete/{id}', 'UserController@destroy');
