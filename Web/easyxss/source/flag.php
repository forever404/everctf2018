<?php
	$flag = "W4rm1ng_Xss";
	if(strstr($_SERVER["HTTP_REFERER"],'easyxss.php'))
		echo "flag{".$flag."}";
?>
