<?php

require 'functions.php';

require 'Task.php';

$pdo = connectToDB();
$tasks = fetchAllTasks($pdo);

//dd($tasks);

require 'index.view.php';

?>