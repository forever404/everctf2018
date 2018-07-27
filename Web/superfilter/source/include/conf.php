<?php
$host = "mysql";
$dbuser = "root";
$dbpass = "ktlshy,xqlsrj";
$dbname = "ctf";
$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
if (!$con)
  {
  echo('Could not connect: ' . mysqli_error());
  }
// $connect = mysql_connect($host, $user, $pass) or die("Unable to connect");
// mysql_select_db($db) or die("Unable to select database");
session_start();

