<?php


$text = "This is sentence is valid. this sentence is not valid.";
preg_match_all('#([A-Z]{1}[a-z0-9]+\s*)+([a-z0-9]+\s*)*(\.|\!|\?)#', $text, $matches);
var_dump ($matches);