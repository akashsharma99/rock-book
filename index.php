<html>
	<head>
		<title>KIIT BOOK</title>
	</head>
	<body background="background.jpg">
		<style>
			h1{
				color:green;
			}
		</style>
		<h1> Create account </h1>
		<form action="create.php" method="POST">
			<input type="text" name="username" placeholder="Enter Your Username"/>
			<br/>
			<input type="password" name="password" placeholder="Enter Your Password"/>
			<br/><br/>
			<input type="submit" value="Create"/>
		</form>
		<br/>
		<h1>Log into existing account</h1>
		<form action="login.php" method="POST">
			<input type="text" name="username" placeholder="Enter Your Username"/>
			<br/>
			<input type="password" name="password" placeholder="Enter Your Password"/>
			<br/><br/>
			<input type="submit" value="Login"/>
		</form>
	</body>
</html>
