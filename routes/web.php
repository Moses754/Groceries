<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;


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



Route::get('/', 'App\Http\Controllers\homeController@index');

Route::get('/redirects', 'App\Http\Controllers\homeController@redirects');

//Role Routes
Route::get('roles','App\Http\Controllers\RoleController@all');
Route::get('role/add','App\Http\Controllers\RoleController@add');
Route::post('role/save','App\Http\Controllers\RoleController@save');
Route::get('role/delete/{id}','App\Http\Controllers\RoleController@delete');
Route::get('role/edit/{id}','App\Http\Controllers\CowController@edit');
Route::post('role/update/{id}','App\Http\Controllers\RoleController@update');

//User Routes
Route::get('users','App\Http\Controllers\UserController@all');
Route::get('user/add','App\Http\Controllers\UserController@add');
Route::post('user/save','App\Http\Controllers\UserController@save');
Route::get('user/delete/{id}','App\Http\Controllers\UserController@delete');

//veges Routes
Route::get('veges','App\Http\Controllers\VegeController@all');
Route::get('vege/add','App\Http\Controllers\VegeController@add');
Route::post('vege/save','App\Http\Controllers\VegeController@save');
Route::get('vege/delete/{id}','App\Http\Controllers\VegeController@delete');
Route::get('vege/edit/{id}','App\Http\Controllers\VegeController@edit');
Route::post('vege/update/{id}','App\Http\Controllers\VegeController@update');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

