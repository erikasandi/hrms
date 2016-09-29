<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth', 'menu', 'site']], function () {
    Route::get('/dashboard' ,'HomeController@dashboard');

    Route::get( '/user', 'UserController@index' );
    Route::get( '/user-data', 'UserController@anyData')->name('user.data' );
    Route::post( '/user', 'UserController@index' );
    Route::get( '/user/add', 'UserController@create' );
    Route::post( '/user/save', 'UserController@store' );
    Route::get( '/user/{id}/edit', 'UserController@edit' );
    Route::get( '/user/{id}/delete', 'UserController@destroy' );
    Route::post( '/user/{id}/update', 'UserController@update' );

    Route::get('/user-profile/{id}', 'UserController@profile');
    Route::get('/user-profile/{id}/edit', 'UserController@editProfile');
    Route::post('/user-profile/{id}/update', 'UserController@updateProfile');
    Route::post('/user-profile/{id}/update-avatar', 'UserController@updateAvatar');
    Route::post('/user-profile/{id}/update-password', 'UserController@updatePassword');

    Route::get( '/site', 'SiteController@index' );
    Route::get( '/site-data', 'SiteController@anyData')->name('site.data' );
    Route::get( '/site/add', 'SiteController@create' );
    Route::post( '/site/save', 'SiteController@store' );
    Route::get( '/site/{id}/edit', 'SiteController@edit' );
    Route::post( '/site/{id}/update', 'SiteController@update' );
    Route::get( '/site/{id}/delete', 'SiteController@destroy' );

    Route::get( '/menu', 'MenuController@index' );
    Route::get( '/menu-data', 'MenuController@anyData')->name('menu.data' );
    Route::get( '/menu/add', 'MenuController@create' );
    Route::post( '/menu/save', 'MenuController@store' );
    Route::get( '/menu/{id}/edit', 'MenuController@edit' );
    Route::post( '/menu/{id}/update', 'MenuController@update' );
    Route::get( '/menu/{id}/delete', 'MenuController@destroy' );

    Route::get( '/asset-condition', 'AssetConditionController@index' );
    Route::get( '/asset-condition-data', 'AssetConditionController@anyData')->name('asset-condition.data' );
    Route::get( '/asset-condition/add', 'AssetConditionController@create' );
    Route::post( '/asset-condition/save', 'AssetConditionController@store' );
    Route::get( '/asset-condition/{id}/edit', 'AssetConditionController@edit' );
    Route::post( '/asset-condition/{id}/update', 'AssetConditionController@update' );
    Route::get( '/asset-condition/{id}/delete', 'AssetConditionController@destroy' );

    Route::get( '/asset-performance', 'AssetPerformanceController@index' );
    Route::get( '/asset-performance-data', 'AssetPerformanceController@anyData')->name('asset-performance.data' );
    Route::get( '/asset-performance/add', 'AssetPerformanceController@create' );
    Route::post( '/asset-performance/save', 'AssetPerformanceController@store' );
    Route::get( '/asset-performance/{id}/edit', 'AssetPerformanceController@edit' );
    Route::post( '/asset-performance/{id}/update', 'AssetPerformanceController@update' );
    Route::get( '/asset-performance/{id}/delete', 'AssetPerformanceController@destroy' );

    Route::get( '/asset-type', 'AssetTypeController@index' );
    Route::get( '/asset-type-data', 'AssetTypeController@anyData')->name('asset-type.data' );
    Route::get( '/asset-type/add', 'AssetTypeController@create' );
    Route::post( '/asset-type/save', 'AssetTypeController@store' );
    Route::get( '/asset-type/{id}/edit', 'AssetTypeController@edit' );
    Route::post( '/asset-type/{id}/update', 'AssetTypeController@update' );
    Route::get( '/asset-type/{id}/delete', 'AssetTypeController@destroy' );

    Route::get( '/asset-location', 'AssetLocationController@index' );
    Route::get( '/asset-location-data', 'AssetLocationController@anyData')->name('asset-location.data' );
    Route::get( '/asset-location/add', 'AssetLocationController@create' );
    Route::post( '/asset-location/save', 'AssetLocationController@store' );
    Route::get( '/asset-location/{id}/edit', 'AssetLocationController@edit' );
    Route::post( '/asset-location/{id}/update', 'AssetLocationController@update' );
    Route::get( '/asset-location/{id}/delete', 'AssetLocationController@destroy' );

    Route::get('/asset', 'AssetController@index');
    Route::get( '/asset-data', 'AssetController@anyData')->name('asset.data' );
    Route::get('/asset/add', 'AssetController@create');
    Route::post('/asset/save', 'AssetController@store');
    Route::get('/asset/{id}/edit', 'AssetController@edit');
    Route::get('/asset/{id}/detail', 'AssetController@detail');
    Route::get('/asset/{id}/delete', 'AssetController@destroy');
    Route::get('/asset/asset-type-form/{formId}', 'AssetController@assetTypeForm');
});




