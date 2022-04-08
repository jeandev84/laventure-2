<?php
namespace App\Http\Controller\Api\Features;


use Laventure\Component\Http\Request\Request;
use Laventure\Component\Http\Response\Response;
use Laventure\Foundation\Routing\Controller;


/**
 * @ProductController
 *
 * @package App\Http\Controller\Api\Features
 *
 * <Generated By Laventure 08/04/2022 03:21:15>
*/
class ProductController extends Controller
{

         
        /**
         * @Route(methods="GET", path="api/features/products", name="api.features_product.list")
         *
         * @param Request $request
         * @return Response
        */
        public function list(Request $request): Response
        {
               return $this->json([
                    "methods" => "GET",
                    "path"    => "api/features/products",
                    "name"    => "api.features_product.list",
                    "action"  => "list"
               ]);
        }


        /**
         * @Route(methods="GET", path="api/features/product/{id}", name="api.features_product.show")
         *
         * @param Request $request
         * @return Response
        */
        public function show(Request $request): Response
        {
               return $this->json([
                    "methods" => "GET",
                    "path"    => "api/features/product/{id}",
                    "name"    => "api.features_product.show",
                    "action"  => "show"
               ]);
        }


        /**
         * @Route(methods="POST", path="api/features/product/create", name="api.features_product.create")
         *
         * @param Request $request
         * @return Response
        */
        public function create(Request $request): Response
        {
               return $this->json([
                    "methods" => "POST",
                    "path"    => "api/features/product/create",
                    "name"    => "api.features_product.create",
                    "action"  => "create"
               ]);
        }


        /**
         * @Route(methods="PUT", path="api/features/product/{id}/edit", name="api.features_product.edit")
         *
         * @param Request $request
         * @return Response
        */
        public function edit(Request $request): Response
        {
               return $this->json([
                    "methods" => "PUT",
                    "path"    => "api/features/product/{id}/edit",
                    "name"    => "api.features_product.edit",
                    "action"  => "edit"
               ]);
        }


        /**
         * @Route(methods="DELETE", path="api/features/product/destroy/{id}", name="api.features_product.destroy")
         *
         * @param Request $request
         * @return Response
        */
        public function destroy(Request $request): Response
        {
               return $this->json([
                    "methods" => "DELETE",
                    "path"    => "api/features/product/destroy/{id}",
                    "name"    => "api.features_product.destroy",
                    "action"  => "destroy"
               ]);
        }
}
