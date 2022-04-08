<?php

use Laventure\Foundation\Facade\Routing\Route;

/*
|----------------------------------------------------------------------
|     Registration all web routes
|----------------------------------------------------------------------
*/


Route::get('/', 'SiteController@index', 'home');
Route::get('/about', 'SiteController@about', 'about');
Route::map('GET|POST', '/contact', 'SiteController@contact', 'contact');


/*
Route::map('GET', 'foo', 'FooController@index', 'foo.index');
Route::map('GET', 'blog', 'BlogController@index', 'blog.index');
Route::map('GET', 'post', 'PostController@index', 'post.index');

$admin = ['module' => "Admin\\", 'name' => "admin.", 'path' => "admin/"];

Route::group(function () {
     Route::map('GET', 'post', 'PostController@index', 'post.index');
}, $admin);
*/

Route::map('GET', 'post', 'PostController@index', 'post.index');

$admin = ["module" => "Admin\\", "prefix" => "admin/", "name" => "admin."];

Route::group(function () {
     Route::map('GET', 'post', 'PostController@index', 'post.index');
}, $admin);


