<?php

//require 'src/business.php';
//require 'src/person.php';
//require 'src/staff.php';

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;

$me = new Person("Marko Burazin");
$staff = new Staff([$me]);

$flafica = new Person("Flafica Manckin");

$webdev = new Business($staff);
$webdev->hire($flafica);

var_dump($webdev);

?>