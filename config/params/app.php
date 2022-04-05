<?php

return [

/*
|------------------------------------------------------------------
|   Micro time
|------------------------------------------------------------------
*/
'start' => microtime(true),


/*
|------------------------------------------------------------------
|   Application name
|------------------------------------------------------------------
*/

'name' => env('APP_NAME', 'Laventure'),


/*
|------------------------------------------------------------------
|   Development mode [ dev or prod ]
|------------------------------------------------------------------
*/

'mode' => env('APP_ENV', 'dev'),



/*
|------------------------------------------------------------------
|   Application Debugger [set it true or false ]
|------------------------------------------------------------------
*/

'debug' => env('APP_DEBUG', false),



/*
|------------------------------------------------------------------
|   Application Timezone
|------------------------------------------------------------------
*/

'timezone' => 'UTC', // Asia/Yekaterinburg



/*
|------------------------------------------------------------------
|   Current language of Application ( russian, french, english )
|------------------------------------------------------------------
*/

'language' => 'ru', // ru, fr, en


/*
|------------------------------------------------------------------
|   Application base URL
|------------------------------------------------------------------
*/

'url' => env('APP_URL', 'http://localhost:8000'),


/*
|------------------------------------------------------------------
|   Configuration namespaces
|------------------------------------------------------------------
*/

'namespaces' => [
    'controllers'  => 'App\\Http\\Controller',
    'entities'     => 'App\\Entity',
    'repositories' => 'App\\Repository',
    'migrations'   => 'App\\Migration',
    'commands'     => 'App\\Console\\Command',
    'fixtures'     => 'App\\Fixtures'
],


/*
|------------------------------------------------------------------
|   Configuration Directories
|------------------------------------------------------------------
*/
'directories' => [
    'commands'    => 'app/Console/Command',
    'migrations'  => 'app/Migration',
    'controllers' => 'app/Http/Controller',
    'fixtures'    => 'app/Fixtures'
],

/*
|------------------------------------------------------------------
|   Configuration Location paths
|------------------------------------------------------------------
*/

'paths' => [
    'routes' => [
        'web'     => '/config/routes/web.php',
        'api'     => '/config/routes/api.php',
        'console' => '/config/routes/console.php'
    ],
],


/*
|------------------------------------------------------------------
|   Configuration resources
|------------------------------------------------------------------
*/

'resources' => [
    'commands'   => 'app/Console/Command/*.php',
    'migrations' => 'app/Migration/*.php',
    'fixtures'   => 'app/Fixtures/*.php',
],

];