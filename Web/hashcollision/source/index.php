<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>劳累的出题人</title>
</head>
<body>
<h1 align=center>hash collision</h1>
<form action="index.php" method="get">
		<input type="text" id="name" name="name" class="form-control" placeholder="用户名">
		<input type="password" id="password" name="password" class="form-control" placeholder="密码">
		<button type="submit" class="btn btn-sm btn-info">登录</button>
</form>

<?php

$flag = 'everctf{2c8f358dc6241ea721fbea0361e130a3}'; 

if (isset($_GET['name']) and isset($_GET['password'])) {
   	// echo sha1($_GET['name'])."</br>";
    // echo sha1($_GET['password'])."</br>";
      
    if ($_GET['name'] == $_GET['password'])
        echo '<p>用户名和密码不能一样</p>'; 
    else if (sha1($_GET['name']) == sha1($_GET['password']))
      die('Flag: '.$flag);
    else
        echo '<p>密码无效</p>';
}
else{
	echo '<p>请先登录</p>';
}

?>
<p>hint:</p>
<pre>
if (sha1($_GET['name']) == sha1($_GET['password']))
    die('Flag: '.$flag);
</pre>

</body>
</html>


