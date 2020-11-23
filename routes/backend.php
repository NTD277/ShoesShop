<?php

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'as' => 'admin.'
],function (){
    Route::get('/','LoginController@index')
        ->middleware('is.logined.admin')
        ->name('login');
    Route::post('login','LoginController@login')->name('handle.login');
    Route::get('logout', 'LoginController@logout')->name('logout');
});

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['web','check.admin.login']
],function (){
    Route::get('dashboard','DashBoardController@index')
        ->name('dashboard');
    Route::resource('/brand','BrandController');
    Route::resource('/product','ProductController');
    Route::resource('/import','ImportController');
    Route::get('/profile','AdminController@index')->name('profile.index');
    Route::get('/profile/{id}','AdminController@edit')->name('profile.edit');
    Route::get('/updateprofile','AdminController@update')->name('profile.update');
});


