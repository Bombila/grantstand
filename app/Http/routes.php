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

    // Modals
    Route::get('modal', ['as' => 'admin.modal.index', 'uses' => 'Admin\Modal\ModalController@getIndex']);
    Route::get('modal/edit/{modal}', 'Admin\Modal\ModalController@getEdit');
    Route::post('modal/edit/{modal}', 'Admin\Modal\ModalController@update');
    Route::get('modal/create', 'Admin\Modal\ModalController@getCreate');
    Route::post('modal/create', 'Admin\Modal\ModalController@store');
    Route::get('modal/destroy/{modal}', 'Admin\Modal\ModalController@destroy');

    // Buttons
    Route::get('button', ['as' => 'admin.button.index', 'uses' => 'Admin\Button\ButtonController@getIndex']);
    Route::get('button/edit/{button}', 'Admin\Button\ButtonController@getEdit');
    Route::post('button/edit/{button}', 'Admin\Button\ButtonController@update');
    Route::get('button/create', 'Admin\Button\ButtonController@getCreate');
    Route::post('button/create', 'Admin\Button\ButtonController@store');
    Route::get('button/destroy/{button}', 'Admin\Button\ButtonController@destroy');

    // Home page settings
    Route::get('home', ['as' => 'admin.home', 'uses' => 'Admin\Home\SettingsController@getIndex']);
    Route::post('home', 'Admin\Home\SettingsController@update');

    /*
     * Services page
     */

    // How we can help
    Route::get('help', ['as' => 'admin.help.index', 'uses' => 'Admin\Help\HelpController@getIndex']);
    Route::get('help/edit/{help}', 'Admin\Help\HelpController@getEdit');
    Route::post('help/edit/{help}', 'Admin\Help\HelpController@update');
    Route::get('help/create', 'Admin\Help\HelpController@getCreate');
    Route::post('help/create', 'Admin\Help\HelpController@store');
    Route::get('help/destroy/{help}', 'Admin\Help\HelpController@destroy');

    // Service page settings
    Route::get('service', ['as' => 'admin.service', 'uses' => 'Admin\Service\SettingsController@getIndex']);
    Route::post('service', 'Admin\Service\SettingsController@update');

    // "Business & Professional Services" section
    Route::get('business', ['as' => 'admin.business.index', 'uses' => 'Admin\Business\BusinessController@getIndex']);
    Route::get('business/edit/{business}', 'Admin\Business\BusinessController@getEdit');
    Route::post('business/edit/{business}', 'Admin\Business\BusinessController@update');
    Route::get('business/create', 'Admin\Business\BusinessController@getCreate');
    Route::post('business/create', 'Admin\Business\BusinessController@store');
    Route::get('business/destroy/{business}', 'Admin\Business\BusinessController@destroy');

    //Clients in clients page
    Route::get('client', ['as' => 'admin.client.index', 'uses' => 'Admin\Client\ClientController@getIndex']);
    Route::get('client/edit/{client}', 'Admin\Client\ClientController@getEdit');
    Route::post('client/edit/{client}', 'Admin\Client\ClientController@update');
    Route::get('client/create', 'Admin\Client\ClientController@getCreate');
    Route::post('client/create', 'Admin\Client\ClientController@store');
    Route::get('client/destroy/{client}', 'Admin\Client\ClientController@destroy');

    // About us page settings
    Route::get('about', ['as' => 'admin.about', 'uses' => 'Admin\About\SettingsController@getIndex']);
    Route::post('about', 'Admin\About\SettingsController@update');

    //Team
    Route::get('team', ['as' => 'admin.team.index', 'uses' => 'Admin\Team\TeamController@getIndex']);
    Route::get('team/edit/{team}', 'Admin\Team\TeamController@getEdit');
    Route::post('team/edit/{team}', 'Admin\Team\TeamController@update');
    Route::get('team/create', 'Admin\Team\TeamController@getCreate');
    Route::post('team/create', 'Admin\Team\TeamController@store');
    Route::get('team/destroy/{team}', 'Admin\Team\TeamController@destroy');

    //Production
    Route::get('production', ['as' => 'admin.production.index', 'uses' => 'Admin\Production\ProductionController@getIndex']);
    Route::get('production/edit/{production}', 'Admin\Production\ProductionController@getEdit');
    Route::post('production/edit/{production}', 'Admin\Production\ProductionController@update');
    Route::get('production/create', 'Admin\Production\ProductionController@getCreate');
    Route::post('production/create', 'Admin\Production\ProductionController@store');
    Route::get('production/destroy/{production}', 'Admin\Production\ProductionController@destroy');
});

Route::auth();


