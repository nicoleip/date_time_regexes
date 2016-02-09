<?php

$text = "jkdsfting blahblah tingaling fkksdfting dkodkwthingksks";
preg_match_all('#([a-z]*(ting)\b)#i', $text, $matches);
var_dump($matches);