<?php

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'as' => 'admin.'
],function (){
    Route::get('dashboard','DashBoardController@index')->name('dashboard');
    Route::resource('/brand','BrandController');
    Route::resource('/product','ProductController');
    Route::resource('/import','ImportController');
});

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'as' => 'admin.'
],function (){
    Route::get('login','LoginController@index')
//        ->middleware('check.admin.login')
        ->name('login');
    Route::post('handle-login','LoginController@handleLogin')->name('handleLogin');
    Route::post('logout', 'LoginController@logout')->name('logout');
});
