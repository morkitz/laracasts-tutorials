<?php

require 'database/connection.php';
require 'database/QueryBuilder.php';

$config = require 'config.php';
return new QueryBuilder(Connection::connectToDB($config['database']));

?>