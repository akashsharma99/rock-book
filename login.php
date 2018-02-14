<html>
<body background="background.jpg"></body>
</html>
<?php

$user=$_POST["username"];
$pass=$_POST["password"];
$flag=0;
	include 'config.php';
    $connect=mysqli_connect($server,$mydbUser,$mydbPass,$mydb);
	 if(!$connect)
	 {
	 	echo "Failed";
	 }
	 
     $query = "SELECT * from userid;";
	$result = $connect->query($query);
	//echo $result;
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		if($row['uid']==$user and $row['password']==$pass)
		{
			$flag=1;
			break;
		}
	}
	if($flag==1)
		echo "Login successful!!!!";
	else {
		echo "Login failed invalid username or password";
	}
	mysqli_close($connect);
?>
