<?php
namespace App\Entity;


/**
 * @User
*/
class User
{


      /**
       * @var mixed
      */
      protected $id;




      /**
       * @var string
      */
      protected $email;




      /**
       * @var string
      */
      protected $username;




      /**
       * @var string
      */
      protected $password;




      /**
       * @var string
      */
      protected $address;




      /**
       * @var string
      */
      protected $code;




      /**
       * @var string
      */
      protected $city;



      /**
       * @return mixed
      */
      public function getId()
      {
           return $this->id;
      }



      /**
       * @return string
      */
      public function getEmail(): string
      {
          return $this->email;
      }



      /**
       * @param string $email
       * @return User
      */
      public function setEmail(string $email): User
      {
          $this->email = $email;

          return $this;
      }




     /**
      * @return string
     */
     public function getUsername(): string
     {
         return $this->username;
     }




     /**
      * @param string $username
      * @return User
     */
     public function setUsername(string $username): User
     {
        $this->username = $username;

        return $this;
     }




     /**
      * @return string
     */
     public function getPassword(): string
     {
         return $this->password;
     }



     /**
      * @param string $password
      * @return User
     */
     public function setPassword(string $password): User
     {
        $this->password = $password;

        return $this;
     }



    /**
     * @return string
    */
    public function getAddress(): string
    {
        return $this->address;
    }




    /**
     * @param string $address
     * @return User
    */
    public function setAddress(string $address): User
    {
        $this->address = $address;

        return $this;
    }




    /**
     * @return string
    */
    public function getCode(): string
    {
        return $this->code;
    }



    /**
     * @param string $code
     * @return User
    */
    public function setCode(string $code): User
    {
        $this->code = $code;

        return $this;
    }




    /**
     * @return string
    */
    public function getCity(): string
    {
        return $this->city;
    }




    /**
     * @param string $city
     * @return User
    */
    public function setCity(string $city): User
    {
        $this->city = $city;

        return $this;
    }


}