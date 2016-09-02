<?php

require 'functions.php';

$age = 21;

if (clubEntryAllowed($age)) {
	echo 'Welcome in!';
} else {
	echo 'Get out!!!';
}

?>