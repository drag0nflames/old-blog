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
    //slug controllers
    Route::get('blog/{slug}', ['uses' => 'BlogController@getSingle', 'as' =>'blog.single'])->where('slug','[\w\d\-\_]+');
    Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

    //Authentication routes
    Route::get('auth/login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);

    //Registration Routes
    Route::get('auth/register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    //passwords reset routes
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    //Route::controllers([
    //    'auth' => 'Auth\AuthController',
    //    'password' => 'Auth\PasswordController',
    //]);


    Route::get('/', 'PagesController@getIndex');

    Route::get('/contact', 'PagesController@getContact');

    Route::get('/about', 'PagesController@getAbout');

    Route::resource('posts','PostController');