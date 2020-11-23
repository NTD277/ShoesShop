<?php

Route::group([
    'namespace' => 'Frontend',
    'as' => 'fr.'
],function (){
    /*Home page*/
    Route::get('/',function (){
        return redirect()->route('fr.home');
    })->name('home');
    Route::get('/index/{select?}','HomePageController@index')->name('home');

    Route::get('/products/{slug}','ProductController@index')->name('detail');

    Route::get('brand/{slug}/{select?}','BrandController@index')->name('brand');

    Route::get('color/{detailColor}/{select?}','ColorController@index')->name('color');
    Route::get('size/{detailSize}/{select?}','SizeController@index')->name('size');
});

Route::group([
    'namespace' => 'Frontend',
    'as' => 'fr.'
],function (){
    Route::get('/registration','LoginController@registration')->name('registration');
    Route::get('/handle-registration','LoginController@handleRegistration')->name('handle.registration');
    Route::get('/login','LoginController@index')->name('login');
    Route::get('/logout','LoginController@logout')->name('logout');
    Route::get('/profile','CustomerController@index')->name('profile');
    Route::get('/handle-profile','CustomerController@update')->name('profile.handle.update');
    Route::get('/handle-login','LoginController@handleLogin')->name('handle.login');
    Route::get('/cart','CartController@index')->name('cart');
    Route::get('/order','OrderController@index')->name('order');
    Route::get('/handle-order','OrderController@handle')->name('handle.order');
    Route::get('search/{keyword?}','SearchController@index')->name('search');
});
