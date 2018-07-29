<?php
	include 'db.php';
	$id=$_GET['id'];
	$sql="SELECT * FROM reg WHERE id= '$id'";
	$i=$m->query($sql);	
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>all</title>
		<style type="text/css">
		.w{
			color: #262626;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 500px;
			height: 550px;
			padding: 40px 40px;
			box-sizing: border-box;	
		}
		body{
			margin: 10;
			padding: 10;
			background-size: cover;
			font-family: sans-serif;
		}
			input[type=submit] {
			width: 20%;
			background-color: #66ff66;
			color: white;
			padding: 10px 5px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
	</head>
	<body>
	<form action="all2.php" method="post"  enctype="multipart/form-data">
	<?php
		while ($x=$i->fetch_assoc()) {
	?>
	<div class="w">
		<h1>Message:</h1>
		<textarea rows="4" cols="50" name="mass" />SEND MESSAGE........</textarea></br>
		<input type="hidden" name="messag" value="<?php echo $x['message']; ?>">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="submit" value="SEND"></br>
		
	</div>
	</form>	
	</body>
	</html>
	<?php
	}
	?>