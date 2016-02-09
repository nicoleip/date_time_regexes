<?php

$text=" SELECT * FROM table_name,
		SELECTT * FROM table_name,
		SELECT data FROM table_name,
		SELECT # FROM table_name,
		SELECT id, firstname, mail FROM MyUsers";

preg_match_all('#(SELECT)(\s([a-zA-Z\s*\,*]+)\s|\s\*\s)(FROM)(.+)#', $text, $matches);
var_dump($matches);