<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>easy-blindsqli</title>
</head>


<?php

//including the Mysql connect parameters.
$dbuser ='root';
$dbpass ='gdxfsm,xyxx';
$dbname ="blindsqli";
$host = 'mysql';



$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
if (!$con)
  {
  echo('Failed to connect to MySQL:' . mysqli_error());
  }
// @$con = mysql_connect($host,$dbuser,$dbpass);
// // Check connection
// if (!$con)
// {
//     echo "Failed to connect to MySQL: " . mysql_error();
// }


// @mysql_select_db($dbname,$con) or die ( "Unable to connect to the database: $dbname");
error_reporting(0);
// take the variables 
if(isset($_GET['id']))
{
$id=$_GET['id'];
//logging the connection parameters to a file for analysis.
$fp=fopen('result.txt','a');
fwrite($fp,'ID:'.$id."\n");
fclose($fp);

// connectivity 

$sql="SELECT * FROM admin WHERE id='$id' LIMIT 0,1";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

	if($row)
	{
  	echo '你是注册用户';
  	echo "<br>";
  	}
	else 
	{
	

	echo(mysqli_error($con));
	
	}
}
	else { echo "Please input the ID as parameter with numeric value";}

?>


</body>
</html>
