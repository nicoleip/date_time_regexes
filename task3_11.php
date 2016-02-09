<?php

$text = "test_test@gmail.com , test_test@yahoo.com, test_test@abv.bg, test_test@msn.com";
preg_match_all('#([a-z0-9\._-])+@(gmail\.com|yahoo\.com|abv\.bg)#i', $text, $matches);
var_dump($matches);