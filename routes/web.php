<?php

Route::get('/', function () {
    return view('welcome');
});
/*Auth::routes();*/
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
