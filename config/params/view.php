<?php
return [

/*
 |------------------------------------------------------------------
 |   Here define global default layout
 |   You must set your view path
 |   - layout   : it's the name of global default layout
 |                name of default layout if you use php extension for templating (default.php)
 |   - extension : (php, twig)
 |   - if you set name it will be used inside all template
 |   - compress : it's used for compressing content page for optimization rendering.
 |------------------------------------------------------------------
*/
'path'      => 'template/views',
'layout'    => 'layouts/default',
'extension' => 'php', // twig
'cache'     =>  true,
'compress'  =>  true // false
];