<?php
namespace App\Http\Middleware;


use Laventure\Component\Http\Middleware\Contract\MiddlewareInterface;
use Laventure\Component\Http\Request\Request;
use Laventure\Component\Http\Response\Response;

/**
 * @AuthenticateMiddleware
*/
class AuthenticateMiddleware implements MiddlewareInterface
{

    /**
     * @inheritDoc
    */
    public function handle(Request $request, callable $next)
    {
        // TODO: Implement handle() method.
    }


    public function terminate(Request $request, Response $response)
    {
        // TODO: Implement terminate() method.
    }
}