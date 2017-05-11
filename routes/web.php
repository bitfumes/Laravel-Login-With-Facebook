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

Route::get('/home', 'HomeController@index');

Route::get('admin/home', 'AdminController@index');

Route::get('admin/editor', 'EditorController@index');
Route::get('admin/test', 'EditorController@test');
// ->middleware('admin');

Route::get('checkYourMail','AdminController@checkMail');

Route::get('admin', 'admin\LoginController@showLoginForm');

Route::post('admin', 'admin\LoginController@login')->name('admin.login');

Route::post('admin-password/email', 'admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::post('admin-password/reset', 'admin\ResetPasswordController@reset');

Route::get('admin-password/reset', 'admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::get('admin-password/reset/{token}', 'admin\ResetPasswordController@showResetForm')->name('admin.password.reset');


Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
//google
Route::get('login/google', 'Auth\LoginController@googleHedirectToProvider');
Route::get('login/gplus/callback', 'Auth\LoginController@googleHandleProviderCallback');
//twitter
Route::get('login/twitter', 'Auth\LoginController@twitterHedirectToProvider');
Route::get('login/twitter/callback', 'Auth\LoginController@twitterHandleProviderCallback');