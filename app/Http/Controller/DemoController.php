<?php
namespace App\Http\Controller;


use App\Http\Common\BaseController;
use Laventure\Component\Http\Request\Request;
use Laventure\Component\Http\Response\Response;


/**
 * @DemoController
 *
 * @package App\Http\Controller
 *
 * <Generated By Laventure 21/04/2022 03:36:29>
*/
class DemoController extends BaseController
{

         
        /**
         * @Route(methods="GET", path="demo", name="demo.index")
         *
         * @param Request $request
         * @return Response
        */
        public function index(Request $request): Response
        {
               return $this->render('demo/index.html');
        }
}
