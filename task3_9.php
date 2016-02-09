<?php

$text = "A 3113 KX, A 4666 BX, CT 1234 MA";
preg_match_all('#((CT){1})\s(\d{4})\s([a-z]{2})#i', $text, $matches);
var_dump($matches);