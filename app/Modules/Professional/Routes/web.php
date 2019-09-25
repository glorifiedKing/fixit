<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'professional','middleware'=>['web','auth']],  function () {
    Route::get('/list',['as'=>'pro.backend.list','uses'=>'ProfessionalController@list']);
    Route::get('/view/{id}',['as'=>'pro.edit','uses'=>'ProfessionalController@EditPro']);
    Route::get('/delete/{id}',['as'=>'pro.delete','uses'=>'ProfessionalController@DeletePro']);

});
