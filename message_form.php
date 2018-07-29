<?php
	include 'db.php';
	$sender = $_COOKIE['sender'];
	$receiver = $_COOKIE['receiver'];
	$sql="SELECT * FROM message WHERE (sent_user='$sender' AND received_user='$receiver') OR (sent_user='$receiver' AND received_user='$sender')";
	$p=$m->query($sql);
		while ($inform=$p->fetch_assoc()) {
			if ($inform['sent_user']==$sender) {
				echo $inform['sms']."<br>";
			}else{
				echo $inform['sms']."<br>";
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin: 10;
			padding: 10;
			background-size: cover;
			font-family: sans-serif;
		}
		input[type=submit] {
			width: 10%;
			background-color: #66ff66;
			color: black;
			padding: 10px 5px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="d">
		<form action="message.php" method="post">
			<input type="hidden" value="<?php echo $_COOKIE['sender'] ?>" name="sent_user">
			<input type="hidden" value="<?php echo $_COOKIE['receiver'] ?>" name="received_user">
			<textarea name="sms" rows="3" cols="60"></textarea></br><br>
			<input type="submit" value="SEND">
		</form>
	</div>
</body>
</html>