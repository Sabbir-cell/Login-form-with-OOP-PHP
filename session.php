<?php
	session_start();
	include "db.php";
	if (isset($_COOKIE['one'])) {
?>
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<style type="text/css">
				h1{
					color:   #ff751a;
				}
				body{
					margin: 10;
					padding: 10;
					background-size: cover;
					font-family: sans-serif;
				}
				.t{
				color: #262626;
				position: absolute;
				top: 40%;
				left: 50%;
				transform: translate(-50%,-50%);
				width:350px;
				height: 400px;
				padding: 40px 30px;
				background:#adebad;
				}
			</style>
		</head>
		<body>
			<div class="t">
				<table  border="5" class="k">
					<h1>Welcome To My Site</h1>			
					<tr>
						<th>Username</th>
						<th>Message</th>
					</tr>
					<?php

						$sender=$_COOKIE['sender'];
						$sql="SELECT * FROM reg WHERE username!='$sender'";
						$result=$m->query($sql);
						while ($data=$result->fetch_assoc()) {
							//echo $data['name']."</br>";
					?>
							<tr>
								<td>
									<?php echo $data['name']; ?>
								</td>
								<td>
									<form action="cookie.php" method="post">
										<input type="hidden" name="receiver" value="<?php echo $data['username']; ?>">
										<input type="submit" name="" value="Message">
									</form>
								</td>
							</tr>
					<?php
						}


					 echo "<a href='logout.php'>logout</a>";
					 ?>
				</table>
			</div>
		</body>
	</html>

<?php	
	}else{
		header("location:login.php");
	}
?>
	



	





	


