<?php

/*
|-------------------------------------------------------------------
|    Create new application
|-------------------------------------------------------------------
*/

$app = new \Laventure\Foundation\Application(
    realpath(__DIR__.'/../')
);



/*
|-------------------------------------------------------------------
|    Binds important interfaces of application
|-------------------------------------------------------------------
*/

$app->pipeHttpKernel(\App\Http\Kernel::class)
    ->pipeConsoleKernel(App\Console\Kernel::class)
    ->pipeExceptionHandler(\App\Exception\ErrorHandler::class);



/*
|-------------------------------------------------------------------
|    Return instance of application
|-------------------------------------------------------------------
*/
return $app;