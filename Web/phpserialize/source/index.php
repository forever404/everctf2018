<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">

<title>出题好累啊</title>
</head>
<body>
<h1 align=center>给你源码</h1>
<pre>
$username  = "this_is_secret"; 
$password  = "this_is_not_known_to_you"; 
$flag = "everctf{**********}"; 

$info = isset($_GET['info'])? $_GET['info']: "" ;
$data_unserialize = unserialize($info);
if ($data_unserialize['username']==$username&&$data_unserialize['password']==$password){
    echo $flag;
}else{
    echo "你输入的东西不对哦～";
}</pre>
<br>
<?php
// show_source(__FILE__);
$username  = "this_is_secret"; 
$password  = "this_is_not_known_to_you"; 
$flag = "everctf{just_easy_serialize}"; 

$info = isset($_GET['info'])? $_GET['info']: "" ;
$data_unserialize = unserialize($info);
if ($data_unserialize['username']==$username&&$data_unserialize['password']==$password){
    echo $flag;
}else{
    echo "操作不够犀利啊，旁友!!";
}
?>
</body>
</html>