<?php

$text = "Is this the right regex to match all the words that contain \'is\'?";
preg_match_all('#([a-z]*(is)[a-z]*)#i', $text, $matches);
var_dump($matches);


