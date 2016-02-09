<?php

$text = "Is this the right regex to match all the valid word that are present in this sentence?";
preg_match_all('#[^|\s*|][a-z]+(\s*|$)#i', $text, $matches);
var_dump($matches);