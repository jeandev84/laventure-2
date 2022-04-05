<?php
namespace App\Fixtures;



use App\Entity\User;
use App\Repository\UserRepository;
use Laventure\Component\Database\ORM\Manager\Contract\ObjectManager;
use Laventure\Component\Database\ORM\Manager\Fixtures\Contract\Fixture;


/**
 * @UserFixture
*/
class UserFixture implements Fixture
{

      /**
       * @inheritDoc
      */
      public function load(ObjectManager $manager)
      {
          for($i = 1; $i < 15; $i++) {

              $user = new User();

              $user->setUsername('fake@'. $i)
                  ->setPassword(password_hash('123', PASSWORD_DEFAULT))
                  ->setAddress('(Головинское шоссе дом 8 к 2а) - '. $i)
                  ->setEmail($i . '@gmail.com')
                  ->setCity('Москва ('. $i . ')')
                  ->setCode('000'. $i);

              $manager->persist($user);
          }

          $manager->flush();
      }



      protected function example()
      {
          /*
            $em = Manager::getInstance()->getEntityManager();
            $em = $this->getDB()->getEntityManager();
            dump($em->getConnection());
            dump($this->em->getRepository(User::class)->findAll());
            $this->em->flush();
            dump($this->em);

            $user = new User();

            $user->setUsername('Жан-Клод')
                 ->setPassword(password_hash('123', PASSWORD_DEFAULT))
                 ->setAddress('Головинское шоссе дом 8 к 2а')
                 ->setEmail('jeanyao@ymail.com')
                 ->setCity('Москва')
                 ->setCode('198400');


            $this->em->persist($user);

            $this->em->flush();

            */
      }




      /**
       * @param UserRepository $repository
       * @return void
      */
      protected function someExampleQuery(UserRepository $repository)
      {
          // make fixture
          /* (new UserFixture())->load($this->em); */


          /*
          $user = $repository->findOneBy(['id' => 42]);

          $this->em->remove($user);

          $this->em->flush();

          $user = $repository->findOneBy(['id' => 57]);

          $this->em->remove($user);

          $this->em->flush();
          */



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
            */
      }
}