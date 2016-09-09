<?php

class User {
   protected $name;
   protected $age;

   public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
   }

   public function name() {
      return $this->name;
   }

   public function age() {
      return $this->age;
   }
}

class UserCollection {
   protected $users = [];

   public function addUser(User $user) {
      $this->users[] = $user;
   }

   public function getUsers() {
      var_dump($this->users);
   }

   public function sortBy($method) {
      usort($this->users, function ($userOne, $userTwo) use ($method) {
         return $userOne->$method() <=> $userTwo->$method();
      });
   }
}

$users = new UserCollection;
$users->addUser(new User("Joe", 31));
$users->addUser(new User("Emma", 23));
$users->addUser(new User("Hrga", 51));
$users->addUser(new User("Konj", 11));

$users->getUsers();

$users->sortBy("name");

$users->getUsers();

$users->sortBy("age");

$users->getUsers();
