<html>
<body background="background.jpg"></body>
</html>
<?php

$user=$_POST["username"];
$pass=$_POST["password"];
include 'config.php';
$connect=mysqli_connect($server,$mydbUser,$mydbPass,$mydb) or die("Database connection failed!");
	 if(!$connect)
	 {
	 	echo "Failed";
	 }
	 
     $query="INSERT INTO userid values('$user','$pass');";
     if ($connect->query($query) == TRUE)
     	{echo "New account created. Welcome to kiit book";}
     else
     	echo "Not Created";
	mysqli_close($connect);
?>
