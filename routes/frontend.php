<?php

Route::group([
    'namespace' => 'Frontend',
//    'prefix' => 'w',
    'as' => 'fr.'
],function (){
    /*Home page*/
    Route::get('/',function (){
        return redirect()->route('fr.home');
    })->name('home');
    Route::get('/index/{select?}','HomePageController@index')->name('home');

    Route::get('/products/{slug}','ProductController@index')->name('detail');

    Route::get('brand/{slug}/{select?}','BrandController@index')->name('brand');
});

Route::group([
    'namespace' => 'Frontend',
    'as' => 'fr.'
],function (){
    Route::get('/registration','LoginController@registration')->name('registration');
    Route::get('/handle-registration','LoginController@handleRegistration')->name('handle.registration');
    Route::get('/login','LoginController@index')->name('login');
    Route::get('/handle-login','LoginController@handleLogin')->name('handle.login');
    Route::get('/cart','CartController@index')->name('cart');
});
