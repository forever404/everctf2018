<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>非常高端的网站</title></head>
</html>
<?php
	echo "我们的网站一定要十分高大上，怎么着也得要求客户端firefox版本100以上吧<br>";
	echo "而且只有ip为8.8.8.8才能得到flag</br>";
	echo '你的浏览器是'.$_SERVER['HTTP_USER_AGENT'].'<br>';
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$ip_valid = 0;
	#$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);
	$user_IP = $_SERVER["HTTP_X_FORWARDED_FOR"]?$_SERVER["HTTP_X_FORWARDED_FOR"]:$_SERVER["REMOTE_ADDR"] ;
	echo "你的ip是 ".$user_IP."</br>";
	if (preg_match("/8.8.8.8/i", $user_IP))  
	   $ip_valid = 1;
	if(preg_match('/FireFox\/(\d+).*/i', $agent, $regs))	
	{
		if($regs[1]<100)
			echo "浏览器还不够格啊！";
		else 
			if($ip_valid)	
				echo "nice!<br> flag{f0rgeryHe4ders}";
			else
			echo"你的ip地址不允许访问";
	}
	else
		echo "你的浏览器还不够格1";
?>
