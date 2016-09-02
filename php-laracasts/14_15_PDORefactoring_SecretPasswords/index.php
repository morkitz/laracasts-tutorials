<?php


$queryBuilder = require 'bootstrap.php';

require 'Task.php';


$tasks = $queryBuilder->selectAllFromTable('todos');

//dd($tasks);

require 'index.view.php';

?>