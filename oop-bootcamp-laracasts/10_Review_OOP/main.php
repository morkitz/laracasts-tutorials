<?php

require 'vendor/autoload.php';

$registration = new Acme\RegisterUser();
$controller = new Acme\AuthController($registration);

$controller->register();