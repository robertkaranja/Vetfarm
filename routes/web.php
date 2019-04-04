<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('/sell', function () {
    return view('functions.index');
});
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/maps', function () {
    return view('maps');
});


Route::get('/admins', 'UsersController@adminUsers');
Route::post('/approve', 'UsersController@approveVet');
Route::get('/manage', 'NotificationsController@manage');
Route::post('/toggle-approve', 'NotificationsController@approval');
/*Route::get('/home', 'NotificationsController@index');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('products', 'ProductsController');
Route::resource('users', 'UsersController');
Route::resource('notifications', 'NotificationsController');



