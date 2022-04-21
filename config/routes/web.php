<?php

use Laventure\Foundation\Facade\Routing\Route;

/*
|----------------------------------------------------------------------
|     Registration all web routes
|----------------------------------------------------------------------
*/

/*
Route::get('/welcome', function () {
   // return json data format JSON
    return [
        'name' => 'Jean',
        'age'  => 37,
        'position' => 'PHP Developer'
    ];
});
*/


Route::get('/', 'SiteController@index', 'home');
Route::get('/about', 'SiteController@about', 'about');
Route::map('GET|POST', '/contact', 'SiteController@contact', 'contact');


$admin = [
    "module" => "Admin\\",
    "prefix" => "admin/",
    "name" => "admin."
];


Route::group(function () {
     Route::map('GET', 'post', 'PostController@index', 'post.index');
}, $admin);


$magazin_module = [
    "module" => "Magazin\Module\\",
    "prefix" => "magazin/module/",
    "name" => "magazin.module."
];

Route::group(function () {
     Route::map('GET', 'shop', 'ShopController@index', 'shop.index');
}, $magazin_module);


Route::map('GET', 'demo', 'DemoController@index', 'demo.index');
