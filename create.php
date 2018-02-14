<html>
<body background="background.jpg"></body>
</html>
<?php
echo "inside create.php <br/>";
$user=$_POST["username"];
$pass=$_POST["password"];
include 'config.php';
$connect=mysqli_connect($server,$mydbUser,$mydbPass,$mydb) or die("Database connection failed!");
	 if(!$connect)
	 {
	 	echo "Failed";
	 }
	 echo "Success cooonection"."<br/>";
     $query="INSERT INTO userid values('$user','$pass');";
     if ($connect->query($query) == TRUE)
     	{echo "created";}
     else
     	echo "Not Created";
	mysqli_close($connect);
?>
