<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
 window.location.href="flag.php"; 
}
</script>
<title>easy xss</title>
</head>
<body>
<h1 align=center>欢迎来到easy xss</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str2=str_replace(">","",$str);
$str3=str_replace("<","",$str2);
$str4=str_replace("<script","<scr_ipt",$str);
$str5=str_replace("on","o_n",$str2);
echo "<h2 align=center>没有找到和".htmlspecialchars($str)."相关的结果.</h2>".'<center>
<form action=easyxss.php method=GET>
<input name=keyword  value="'.$str5.'">
<input type=submit name=submit value="搜索"/>
</form>
</center>';
?>
</body>
</html>




