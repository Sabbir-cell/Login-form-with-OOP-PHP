<?php
	setcookie("receiver",$_POST['receiver'],time()+7200,"/");
	header("LOCATION: message_form.php");
?>