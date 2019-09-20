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

Route::group(['prefix' => 'admin','middleware'=>['web','auth']], function () {
    Route::get('/',['as'=>'admin.dashboard','uses'=>'DashboardController@index']);
    /***** Roles and Permissions ]  ***/
      /* Roles */
      Route::get('/roles',['as'=>'admin.roles.index','uses'=>'PermissionsController@roles']);
      Route::get('/roles/new',['as'=>'admin.roles.create','uses'=>'PermissionsController@CreateRole']);
      Route::post('/roles/new',['as'=>'admin.roles.save','uses'=>'PermissionsController@SaveRole']);
      Route::get('/roles/{id}',['as'=>'admin.roles.edit','uses'=>'PermissionsController@EditRole']);
      Route::post('/roles/{id}',['as'=>'admin.roles.update','uses'=>'PermissionsController@UpdateRole']);
      Route::get('/roles/{id}/delete',['as'=>'admin.roles.delete','uses'=>'PermissionsController@DeleteRole']);
      Route::get('/roles/{roleid}/{permissionid}/remove',['as'=>'admin.roles.permissions.remove','uses'=>'PermissionsController@RemoveRole']);
      Route::get('/roles/{roleid}/{permissionid}/add',['as'=>'admin.roles.permissions.add','uses'=>'PermissionsController@AddRole']);

      /* Permissions */
      Route::get('/permissions',['as'=>'admin.permissions.index','uses'=>'PermissionsController@permissions']);
      Route::get('/permissions/new',['as'=>'admin.permissions.create','uses'=>'PermissionsController@CreatePermission']);
      Route::post('/permissions/new',['as'=>'admin.permissions.save','uses'=>'PermissionsController@SavePermission']);
      Route::get('/permissions/{id}',['as'=>'admin.permissions.edit','uses'=>'PermissionsController@EditPermission']);
      Route::post('/permissions/{id}',['as'=>'admin.permissions.update','uses'=>'PermissionsController@UpdatePermission']);
      Route::get('/permissions/{id}/delete',['as'=>'admin.permissions.delete','uses'=>'PermissionsController@DeletePermission']);

      /* Users */
      Route::get('/users',['as'=>'admin.users.index','uses'=>'UserController@users']);
      Route::get('/users/new',['as'=>'admin.users.create','uses'=>'UserController@CreateUser']);
      Route::post('/users/new',['as'=>'admin.users.save','uses'=>'UserController@SaveUser']);
      Route::get('/users/{id}',['as'=>'admin.users.edit','uses'=>'UserController@EditUser']);
      Route::post('/users/{id}',['as'=>'admin.users.update','uses'=>'UserController@UpdateUser']);
      Route::get('/users/{id}/delete',['as'=>'admin.users.delete','uses'=>'UserController@DeleteUser']);

      /* Modules */
      Route::get('/modules',['as'=>'admin.modules.index','uses'=>'ModuleController@index']);
      Route::get('/modules/{id}/enable',['as'=>'admin.modules.enable','uses'=>'ModuleController@activate'])->where('id', '[a-zA-Z]+');
      Route::get('/modules/{id}/disable',['as'=>'admin.modules.disable','uses'=>'ModuleController@deactivate'])->where('id', '[a-zA-Z]+');
      Route::get('/modules/{id}/increment_order',['as'=>'admin.modules.increment','uses'=>'ModuleController@IncreaseOrder'])->where('id', '[a-zA-Z]+');
});
