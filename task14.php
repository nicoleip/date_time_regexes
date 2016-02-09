<?php

$text = "while(\$array){do something;}
		 while \$a == \$b {do something;}
		 while(\$variable == \$other_variable){do something;}
		 while(){}";
preg_match_all('#while\(.+\)\{.+\}#', $text, $matches);
var_dump($matches);