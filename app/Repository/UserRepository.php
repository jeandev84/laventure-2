<?php
namespace App\Repository;



use App\Entity\User;
use Laventure\Component\Database\ORM\Manager\EntityManager;
use Laventure\Component\Database\ORM\Repository\ServiceRepository;



/**
 * @UserRepository
*/
class UserRepository extends ServiceRepository
{

      /**
       * @param EntityManager $em
      */
      public function __construct(EntityManager $em)
      {
           parent::__construct($em, User::class);
      }
}