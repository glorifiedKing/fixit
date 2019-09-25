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
    return view('frontend.pages.homepage');
});
Route::get('/professionals',['as'=>'pro.frontend.list','uses'=>'\App\Modules\Professional\Http\Controllers\FrontController@list']);
Route::get('/professionals/{id}',['as'=>'pro.frontend.view','uses'=>'\App\Modules\Professional\Http\Controllers\FrontController@ViewPro']);
Auth::routes();
Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('googleAuth');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback')->name('googleAuthCallback');
Route::get('/home', 'HomeController@index')->name('home');
