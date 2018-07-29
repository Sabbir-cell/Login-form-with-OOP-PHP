<?php
session_start();
//if (isset($_COOKIE['one'])) {
	//header("location:session.php");	
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginBox">
	<h2>log In Here</h2>
	<form method="post" action="select.php">
		<a>Username:</a>
		<input type="text" name="username" placeholder="Enter Username">
		<a>Password:</a>
		<input type="password" name="password" placeholder="Enter Password">
		<input type="submit" value="LOGIN">
		<input type="reset" value="CLEAR">
	</form>
	</div>
</body>
</html>
<?php
//}else{


//header("location:session.php");
//}
?>