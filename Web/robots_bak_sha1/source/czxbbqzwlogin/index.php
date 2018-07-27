<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台</title>
</head>
<body>
<?php  
error_reporting(0); 
require 'flag.php';  
 
if (isset($_GET['name']) and isset($_GET['password'])) {  
    if ($_GET['name'] == $_GET['password'])  
        print '用户名和密码不能相同.';  
    else if (sha1($_GET['name']) === sha1($_GET['password']))  
      die('Flag: '.$flag);  
    else  
        print '<p class="alert">密码不合法</p>';  
}  
?>  
  
<section class="login">    
    <form method="get">  
    <center>
        <h2>后台登录</h2>
        username:<input type="text" required name="name" /><br/>  
        password:<input type="text" required name="password"  /><br/>  
        <input type="submit" value="登录"/>  
        </center>
        <!--index.php.bak-->   </form>  
</section>  
</body>
</html>