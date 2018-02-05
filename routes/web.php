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



// For Admin
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//

// For Restaurant
Route::get('restaurant/home', 'RestaurantController@index');
Route::get('restaurant', 'Restaurant\LoginController@showLoginForm')->name('restaurant.login');
Route::post('restaurant', 'Restaurant\LoginController@login');
Route::post('restaurant-password/email', 'Restaurant\ForgotPasswordController@sendResetLinkEmail')->name('restaurant.password.email');
Route::get('restaurant-password/reset', 'Restaurant\ForgotPasswordController@showLinkRequestForm')->name('restaurant.password.request');
Route::post('restaurant-password/reset', 'Restaurant\ResetPasswordController@reset');
Route::get('restaurant-password/reset/{token}', 'Restaurant\ResetPasswordController@showResetForm')->name('restaurant.password.reset');
//
