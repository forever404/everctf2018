<?php

	highlight_file("index.php");

	include("flag.php");

	$ever404 = '1226';

	parse_str($_GET['e']);

	if($ever404 == 'USTB')

		echo $flag;

?>
