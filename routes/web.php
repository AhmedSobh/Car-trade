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
Route::get('{car}/cars','Dashboard\CarController@show')->name('cars.show');
Route::get('cars/create','Dashboard\CarController@create')->name('cars.create');
Route::post('cars/store','Dashboard\CarController@store')->name('cars.store');
Route::get('cars/{car}/edit','Dashboard\CarController@edit')->name('cars.edit');
Route::put('cars/{car}','Dashboard\CarController@update')->name('cars.update');
Route::delete('cars/{car}','Dashboard\CarController@destroy')->name('cars.delete');
Route::get('cars/request','Dashboard\CarController@request')->name('cars.request');
Route::post('cars/request','Dashboard\CarController@make')->name('cars.make.request');
Route::get('cars/requests','Dashboard\CarController@list')->name('cars.request.list');
Route::get('changeApprove/{make}/state/{state}','Dashboard\CarController@change')->name('change');
Route::get('cars/ticket','Dashboard\CarController@ticket')->name('cars.ticket');
Route::post('cars/ticket','Dashboard\CarController@makeTicket')->name('cars.make.ticket');
Route::get('cars/tickets','Dashboard\CarController@listTickets')->name('cars.ticket.list');
