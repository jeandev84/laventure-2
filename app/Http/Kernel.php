<?php
namespace App\Http;


use App\Http\Middleware\AuthenticateMiddleware;
use Laventure\Foundation\Http\Kernel as HttpBaseKernel;



/**
 * @Kernel
 */
class Kernel extends HttpBaseKernel
{


    /**
     * @var array
    */
    protected $middlewares = [

    ];


    /**
     * @var array
    */
    protected $routeMiddlewares = [
       'auth' => AuthenticateMiddleware::class
    ];
}