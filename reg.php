<?php
	include 'db.php';
	if (isset($_POST['name'])) {
		$name=$_POST['name'];
		$use=$_POST['username'];
		$emai=$_POST['email'];
		$pass=$_POST['pass'];		
		$sql="SELECT * FROM reg  WHERE username='$use' OR email='$emai'" ;
		$ss=$m->query($sql);
		while($data=$ss->fetch_assoc()){
			$data['username'];
			$data['email'];
		}
		if ($ss->num_rows>0){
				echo "Please Enter other email or username";
			}else{
				$sql="INSERT INTO reg (name,username,email,password) VALUES('$name','$use','$emai','$pass')";
				if ($m->query($sql)===TRUE) {
				#echo "Done";
					header('location:login.php');
				}else{
					echo "Fail";
				}	
			}
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registion</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="c">
<h1>REGISTION FORM</h1>
<form method="post" action="#">
	Name:<br>
	<input type="text" name="name" required><br><br>
	Username:<br>
	<input type="text" name="username" required><br><br>
	Email:<br>
	<input type="email" name="email" required><br><br>
	Password:<br>
	<input type="Password" name="pass" required><br><br>
	<input type="submit" value="OK"><br><br>
	<input type="reset" value ="CLEAR">
	
</form>
	
</div>

</body>
</html>