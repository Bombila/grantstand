<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Showcase\PageController@getIndex');
Route::get('/services', 'Showcase\PageController@getServices');
Route::get('/about', 'Showcase\PageController@getAbout');
Route::get('/mobile', 'Showcase\PageController@getMobile');
Route::get('/clients', 'Showcase\PageController@getClients');

Route::auth();

Route::get('/admin', 'Admin\Dashboard\DashboardController@getWelcome');

Route::group([ 'prefix' => 'admin', 'middleware' => 'auth' ], function () {

    // Logo
    Route::get('logo', 'Admin\Logo\LogoController@getEdit');
    Route::post('logo', 'Admin\Logo\LogoController@update');

    // Menu
    Route::get('menu', ['as' => 'admin.menu.index', 'uses' => 'Admin\Menu\MenuController@getIndex']);
    Route::get('menu/edit/{menu}', 'Admin\Menu\MenuController@getEdit');
    Route::post('menu/edit/{menu}', 'Admin\Menu\MenuController@update');
    Route::get('menu/create', 'Admin\Menu\MenuController@getCreate');
    Route::post('menu/create', 'Admin\Menu\MenuController@store');
    Route::get('menu/destroy/{menu}', 'Admin\Menu\MenuController@destroy');

    // Reviews
    Route::get('review', ['as' => 'admin.review.index', 'uses' => 'Admin\Review\ReviewController@getIndex']);
    Route::get('review/edit/{review}', 'Admin\Review\ReviewController@getEdit');
    Route::post('review/edit/{review}', 'Admin\Review\ReviewController@update');
    Route::get('review/create', 'Admin\Review\ReviewController@getCreate');
    Route::post('review/create', 'Admin\Review\ReviewController@store');
    Route::get('review/destroy/{review}', 'Admin\Review\ReviewController@destroy');

    // Brand
    Route::get('brand', ['as' => 'admin.brand.index', 'uses' => 'Admin\Brand\BrandController@getIndex']);
    Route::get('brand/edit/{brand}', 'Admin\Brand\BrandController@getEdit');
    Route::post('brand/edit/{brand}', 'Admin\Brand\BrandController@update');
    Route::get('brand/create', 'Admin\Brand\BrandController@getCreate');
    Route::post('brand/create', 'Admin\Brand\BrandController@store');
    Route::get('brand/destroy/{brand}', 'Admin\Brand\BrandController@destroy');

    // Article (news)
    Route::get('article', ['as' => 'admin.article.index', 'uses' => 'Admin\Material\ArticleController@getIndex']);
    Route::get('article/edit/{article}', 'Admin\Material\ArticleController@getEdit');
    Route::post('article/edit/{article}', 'Admin\Material\ArticleController@update');
    Route::get('article/create', 'Admin\Material\ArticleController@getCreate');
    Route::post('article/create', 'Admin\Material\ArticleController@store');
    Route::get('article/destroy/{article}', 'Admin\Material\ArticleController@destroy');
});

Route::auth();

