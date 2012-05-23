<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login-Page</title>
</head>
<body>
	<div class="header">
		<span class="specialtext-login">User Login</span>
	</div>
	
	<div class="dummy-login">
		<div class="menu-login">
			<div class="menu_nav"><a href="../index.html"><img src="../flags/gb.png" alt=""></a><b>NAVIGATION</b></div>
		</div>
	
		<div class="login">
			<form method="POST" action="loginproc.php">
				<table>
					<tr>
						<td>Username:</td><td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password:</td><td><input type="password" name="password"></td>
					</tr>
				</table>
				<br>
				<center><input type="submit" value="Login"></center>
			</form>
			<?php
			if (isset($_GET['msg']))
			{
				echo "<p><b><i>" . $_GET['msg'] . "</i></b></p>";
			}	
			?>
		</div>
	</div>
</body>
</html>
