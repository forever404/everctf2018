<?php
	header("Content-Type:text/html;charset=utf-8");
	error_reporting(E_ERROR);
	define ('PATH_WEB', dirname(__FILE__).'/');
	require_once(dirname(__FILE__).'/include/conf.php');
	require_once(dirname(__FILE__).'/include/fiter.php');
#	var_dump($_SESSION);
	if($_SESSION['flag'] === 1){
		header("location:./admin/");exit;
	}
?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>super filter</title>

  </head>

  <body>

				<h1><small>欢迎来到Super filter</small></h1>
			<form action="login.php" method="post">
							<input type="text" id="uname" name="uname" class="form-control" placeholder="用户名">
							<input type="password" id="passwd" name="passwd" class="form-control" placeholder="密码">
						<button type="submit" class="btn btn-sm btn-info">登录</button>
			</form>
			
  </body>
</html>
