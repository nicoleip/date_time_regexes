<?php

$text = "test_test@gmail.com , test_test@yahoo.com";
preg_match_all('#([a-z0-9\._-])+(@gmail\.com)#i', $text, $matches);
var_dump($matches);