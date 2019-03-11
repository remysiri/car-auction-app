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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/status', 'StatusController@index')->name('status');
Route::resource('/users', 'UserController');
Route::resource('/auctions', 'AuctionController');
Route::resource('/showroom', 'ShowroomController');
Route::resource('/blog', 'BlogController');
Route::resource('/admins', 'AdminController');
//Route::resource('/users', 'UsersController@index')->name('users.index');
//Route::get('/users/add', 'UsersController@add')->name('users.add');
//Route::post('/users/validateInsert', 'UsersController@validateInsert')->name('users.validateInsert');
//Route::get('/users/edit/{$id}', 'UsersController@edit')->name('users.edit');
//Route::post('/users/update/{$id}', 'UsersController@update')->name('users.update');
//Route::get('/users/delete/{$id}', 'UsersController@delete')->name('users.delete');
Route::view('/welcome', 'welcome')->name('welcome');

