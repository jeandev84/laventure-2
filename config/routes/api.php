<?php
use Laventure\Foundation\Facade\Routing\Route;


/*
|----------------------------------------------------------------------
|           Registration all API routes
|----------------------------------------------------------------------
*/


$api_product = [
    "module" => "Api\\",
    "prefix" => "api/",
    "name" => "api."
];

Route::api()->group(function () {
    Route::resourceAPI('product', 'ProductController');
}, $api_product);



$api_features_product = [
    "module" => "Api\Features\\",
    "prefix" => "api/features/",
    "name" => "api.features."
];

Route::api()->group(function () {
    Route::resourceAPI('features_product', 'ProductController');
}, $api_features_product);
