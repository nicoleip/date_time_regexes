<?php

$text = "This is a valid Bulgarian cell number: 0894548626. This is not - 0982456781";
preg_match_all('#(08{1})([7-9]{1})([2-9]{1})([0-9]{6})#', $text, $matches);
var_dump ($matches);