<?php
	header("Content-Type:text/html;charset=utf-8");
	error_reporting(E_ERROR);
	define ('PATH_WEB', dirname(__FILE__).'/');
	require_once(dirname(__FILE__).'/include/conf.php');
	require_once(dirname(__FILE__).'/include/fiter.php');
	#var_dump($_SESSION);
	if($_SESSION['flag'] === 1){
	#	header("location:./admin/");exit;
	}
	#echo $_POST['uname'].'````'.$_POST['passwd'];
	
	if($_POST['uname'] && $_POST['passwd']){
		setcookie("hint","JHF1ZXJ5PSJTRUxFQ1QgKiBGUk9NIGFkbWluIFdIRVJFIHVuYW1lPSciLiR1bmFtZS4iJyI7CiAgICAgICAgICAgIGlmICgkcm93WydwYXNzd2QnXT09PSRwYXNzd2QpewoJCQkJJF9TRVNTSU9OWydmbGFnJ10gPSAxOw==");
		$obj = new fiter();
		$uname = $obj->sql_clean($_POST['uname']);
		$passwd = md5($_POST['passwd']);
		$query="SELECT * FROM admin WHERE uname='".$uname."'";
		
		$host = "mysql";
		$dbuser = "root";
		$dbpass = "ktlshy,xqlsrj";
		$dbname = "ctf";
		$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
		$result=mysqli_query($con,$query);		
		#var_dump($result);
		if ($row = mysqli_fetch_array($result)){
			#print_r($row);echo "\n\r<br/>";
            if ($row['passwd']===$passwd){
				$_SESSION['flag'] = 1;
				#echo $_SESSION['flag'];
				header("location:./admin/");exit();
			}
            else{
				echo "<script> alert('密码错误!');parent.location.href='index.php'; </script>"; exit();
            }
        }
		else{
			echo "<script> alert('用户名错误!');parent.location.href='index.php'; </script>"; exit();
		}
		
	}
	else {
		echo "<script> alert('用户名和密码不能为空！');parent.location.href='index.php'; </script>"; exit();
	}
?>
