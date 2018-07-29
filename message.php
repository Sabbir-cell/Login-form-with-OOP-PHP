<?php
	include 'db.php';
	$sent_user=$_POST['sent_user'];
	$received_user=$_POST['received_user'];
	$sms=$_POST['sms'];
	$sql="INSERT INTO message (sent_user,received_user,sms) VALUES('$sent_user','$received_user','$sms')";
	if ($m->query($sql)===TRUE) {
		header('location:message_form.php');
	}else{
		echo "Not sent";
	}
?>