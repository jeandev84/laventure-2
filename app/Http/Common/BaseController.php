<?php
namespace App\Http\Common;


use Laventure\Foundation\Routing\Controller;



/**
 * @BaseController
*/
class BaseController extends Controller
{
    /**
     * @var mixed
    */
    protected $layout = 'layouts/default';
}