<?php

$games = ['Mass Effect', 'Super Mario Bros', 'Zelda', 'Fallout', 'Metal Gear'];

usort($games, function($a, $b) {
   //return $a <=> $b; // -1, 0, 1 // order alphabetically
   return strlen($a) <=> strlen($b); // order by string length
});

var_dump($games);
