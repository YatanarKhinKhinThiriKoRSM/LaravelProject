<?php

Route::get('/', 'UserController@viewuserlist');
Route::get('/user/register', 'UserController@register');
Route::post('/user/register', 'UserController@registerconfirm');
Route::post('/user/registerconfirm', 'UserController@create');



