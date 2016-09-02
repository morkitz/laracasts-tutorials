<?php

require 'core/bootstrap.php';

require Router::load('routes.php')->route(Request::getUri());

?>