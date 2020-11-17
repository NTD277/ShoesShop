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

