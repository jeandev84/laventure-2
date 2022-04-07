<?php

use Laventure\Foundation\Facade\Routing\Route;

/*
|----------------------------------------------------------------------
|     Registration all web routes
|----------------------------------------------------------------------
*/


/*
Route::get('/welcome', function () {
    return "Welcome to the Laventure.";
});

Route::get('/', [\App\Http\Controller\SiteController::class, 'index'], 'home');
Route::get('/about', [\App\Http\Controller\SiteController::class, 'about'], 'about');
Route::map('GET|POST', '/contact', [\App\Http\Controller\SiteController::class, 'contact'], 'contact');
*/

Route::get('/', 'SiteController@index', 'home');
Route::get('/about', 'SiteController@about', 'about');
Route::map('GET|POST', '/contact', 'SiteController@contact', 'contact');

/*
Route::get('/blog', 'BlogController@index', 'blog.index');
Route::resource('foo', 'FooController');
*/

