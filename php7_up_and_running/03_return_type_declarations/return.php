<?php

class User {}

interface SomeInterface {
   public function getUser() : User;
}

class SomeClass implements SomeInterface {
   public function getUser() : User {
      // return []; // Will cause fatal error
      return new User;
   }
}

var_dump( (new SomeClass)->getUser() );
