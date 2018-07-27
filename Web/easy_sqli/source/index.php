<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Easy Sqli</title>
</head>

<body>
<center><h2>welcome to easy sqli</h2></center>


<?php

//including the Mysql connect parameters.
$dbuser ='root';
$dbpass ='gdxfsm,xyxx';
$dbname ="sqli";
$host = 'mysql';

$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
if (!$con)
  {
  echo('Could not connect: ' . mysqli_error());
  }
  
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

  	echo '<center>'.'Your name:'. $row['name'].'<br>';

  	echo $row['message'].'</center>';

  	}
	else 
	{

		echo(mysqli_error($con));

	}
}
	else { echo "<center>Please input the ID as parameter with numeric value</center>";}

?>

</body>
</html>





 
