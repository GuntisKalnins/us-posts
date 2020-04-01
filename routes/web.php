<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'HomeController@index');


Auth::routes();

Route::get('/user/area/{area}', 'User\AreaController@store')->name('user.area.store');


Route::group(['prefix' => '/{area}'], function () {

    Route::group(['prefix' => '/categories'], function () {

        Route::get('/', 'Category\CategoryController@index')->name('category.index');


        Route::group(['prefix' => '/{category}'], function () {

            Route::get('/listings', 'Listing\ListingController@index')->name('listings.index');
        });

    });

    Route::group(['prefix' => '/listing', 'namespace' => 'Listing'], function () {
        Route::post('/{listing}/favourites', 'ListingFavouriteController@store')->name('listings.favourites.store');
    });



    Route::get('/{listing}', 'Listing\ListingController@show')->name('listings.show');





});