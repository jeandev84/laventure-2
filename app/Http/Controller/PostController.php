<?php
namespace App\Http\Controller;


use App\Http\Common\BaseController;
use Laventure\Component\Http\Request\Request;
use Laventure\Component\Http\Response\Response;


/**
 * @PostController
 *
 * @package App\Http\Controller
 *
 * <Generated By Laventure 07/04/2022 23:59:14>
*/
class PostController extends BaseController
{

         
        /**
         * @Route(methods="GET", path="/post", name="post.index")
         *
         * @param Request $request
         * @return Response
        */
        public function index(Request $request): Response
        {
               return $this->render('post/index.php');
        }
}
