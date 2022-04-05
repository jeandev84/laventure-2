<?php
namespace App\Http\Controller;


use App\Entity\User;
use App\Fixtures\UserFixture;
use App\Repository\UserRepository;
use Laventure\Component\Database\Connection\Contract\ConnectionInterface;
use Laventure\Component\Database\Migration\Migrator;
use Laventure\Component\Database\ORM\Manager\EntityManager;
use Laventure\Component\Database\Schema\BluePrint\BluePrint;
use Laventure\Component\Database\Schema\Schema;
use Laventure\Component\Http\Request\Request;
use Laventure\Component\Http\Response\Response;
use Laventure\Foundation\Routing\Controller;



/**
 * @SiteController
*/
class SiteController extends Controller
{


      /**
       * @var EntityManager
      */
      protected $em;





      /**
       * @var ConnectionInterface
      */
      protected $connection;





      /**
       * @var bool
      */
      protected $layout = 'layouts/default';




       /**
        * @param EntityManager $em
        * @param ConnectionInterface $connection
      */
      public function __construct(EntityManager $em, ConnectionInterface $connection)
      {
            $this->em = $em;
            $this->connection = $connection;
      }





      /**
       * @param Request $request
       * @param UserRepository $repository
       * @return Response
      */
      public function index(Request $request, UserRepository $repository): Response
      {
             return $this->render('index.php', []);
      }






      /**
       * @param Request $request
       * @return Response
      */
      public function about(Request $request): Response
      {
          // return $this->render('site/about.php', []);
          return $this->render('about', []);
      }




      /**
       * @param Request $request
       * @return Response
       */
       public function contact(Request $request): Response
       {
            // return $this->render('site/contact.php', []);
            return $this->render('contact', []);
       }



       protected function testingEntityManager()
       {
           // make fixture
           /*

           (new UserFixture())->load($this->em);

           $user = $repository->findOneBy(['id' => 42]);

           $this->em->remove($user);

           $this->em->flush();

           $user = $repository->findOneBy(['id' => 57]);

           $this->em->remove($user);

           $this->em->flush();


            $users = $repository->findAll();

           /** @var User $user *//*
              foreach ($users as $user) {
                 $user->setAddress('г. Москва, '. $user->getAddress());
              }

              $this->em->flush();

              dd($this->em);

              /*
             $fixture = new UserFixture();
             $fixture->load($this->em);


             $user = $repository->findOneBy(['id' => 63]);

             if (! $user) {
                   dd("User with ID : 63 does not exist.");
             }

             $users = $repository->findAll();

             $this->em->flush();

             dd($this->em);

             // dd($migrator->getMigrations());
             // dd($migrator->getMigrationNamespace());

             $fixture = new UserFixture();
             $fixture->load($this->em);


              $user = $repository->findOneBy(['id' => 14]);

             $users = $repository->findAll();


             $this->em->flush();

             dd($this->em);
            */

       }
}