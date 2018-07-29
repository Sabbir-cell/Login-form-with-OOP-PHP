<?php
	session_start();
	include 'db.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM reg WHERE username='$username' or password='$password' ";
	$result=$m->query($sql);
		if ($result->num_rows>0) {
			while ($b=$result->fetch_assoc()) {
				$pass=$b['password'];
			}
			if ($password=$pass) {
				$_SESSION['sabbir']="biswas";
				setcookie("one","two",time()+7200,"/");
				setcookie("sender",$_POST['username'],time()+7200,"/");
				//echo "Success";
				header('location:session.php');
			}else{
				//echo "fail";
				header('location:login.php');
			}
		}else{
			echo "corret your information";
		}
?>