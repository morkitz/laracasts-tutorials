<?php

$tasks = $app['database']->selectAllFromTable('todos');

require 'views/index.view.php';

?>