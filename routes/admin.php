<?php
Route::get('/', 'AdminController@index')->name('dashboard');
Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');
