<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard','Dashboard\DashboardController@index')->name('dashboard');
Route::get('users','Dashboard\DashboardController@users')->name('users');
Route::get('users/{user}','Dashboard\DashboardController@userShow')->name('users.show');
Route::post('users/{user}','Dashboard\DashboardController@userUpdate')->name('user.update');
Route::get('cars','Dashboard\CarController@index')->name('cars.index');
Route::get('cars/{car}','Dashboard\CarController@show')->name('cars.show');
Route::get('cars/create','Dashboard\CarController@create')->name('cars.create');
