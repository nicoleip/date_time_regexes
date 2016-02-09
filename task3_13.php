<?php

$text="<input type = class = \"valid\" \"class= not_valid\"  class =\"valid_again\" class =\"67notValid\"/>";
preg_match_all('#(class\s*=\s*\")[a-z][a-z_-]*\"\s?#i', $text , $matches);
var_dump($matches);