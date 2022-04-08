<?php

use Laventure\Foundation\Facade\Routing\Route;

/*
|----------------------------------------------------------------------
|     Registration all web routes
|----------------------------------------------------------------------
*/

/*
Usage example :


Route::get('/welcome', function () {
   return new Response('Welcome to Laventure!');
});


Route::get('/format-json', function () {
   // return json data format JSON
    return [
        'name' => 'Jean',
        'age'  => 37,
        'position' => 'PHP Developer'
    ];
});

Route::get('/foo', function (Request $request) {
   return new Response('Welcome to Laventure!');
});



Route::get('/my-service', function (MyService $service) {

   return new Response($service->sendMailContent());

});

Route::get('/user/{id}', function ($id) {
   return new JsonResponse([
        'id'       => 1,
        'name'     => 'Jean-Claude',
        'position' => 'PHP Developer'
        'age'      => 38
   ]);
});


Route::get('/', 'FooController@index', 'home');
Route::get('/about', [App\Http\Controller\FooController::class, 'about'], 'home');
Route::post('contact', 'FooController@contact', 'contact');

Route::map('GET|POST', 'foo/contact-us', 'FooController@contactUs', 'contact_us');

Route::get('example/{something}', 'ExampleController@show')
->where('something', 'some_regex')
->name('example_show')
->middleware('ExampleMiddleware')
;


$admin = [
    "module" => "Admin\\",
    "prefix" => "admin/",
    "name" => "admin.",
    "middlewares" => [AuthenticatedMiddleware::class, 'auth']
];


Route::group(function () {
     Route::get('post', 'PostController@index', 'post.index');
}, $admin);

*/

