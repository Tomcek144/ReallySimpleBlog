<?php
session_start();
include('config.inc');

if (isset($_POST['send']) AND $_POST['title'] != "" AND $_POST['content'] != "")
{
	$rows = mysql_num_rows(mysql_query("SELECT * FROM posts")) + 1;
	
	$title = $_POST['title'];
	$content = $_POST['content'];
	$author = $_SESSION['username'];
	$date = date("d.m.Y");
	
	$result = mysql_query("INSERT INTO posts (id, title, content, author, date) VALUES ('$rows', '$title', '$content', '$author', '$date')");
	
	if ($result != 1)
	{
		header("location:newblogpost.php?msg=Blog Post has not been created!");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Coming+Soon">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Special+Elite">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>New Blog Entry - Website of Thomas Siladi</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
</head>
<body>
	<div class="header">
		<img src="./WEBandDESIGN.png" alt="LOGO">
	</div>
	
	<div class="dummy">
		<div class="menu">
			<div class="menu_nav">
				<div style="float: left;">
					<a href="../index.html"><img src="../flags/gb.png" alt=""></a><b>NAVIGATION</b>
				</div>
				<div style="float: right;">
					<?php
					if (isset($_SESSION['role']) AND $_SESSION['role'] == "admin")
					{
						?><a href="./logout.php">LOGOUT</a><?php
					}
					else
					{
						?><a href="./login.php">LOGIN</a><?php
					}
					?>
				</div>
			</div>
			<div class="menu_nav-text">
				<div style="float: left;">
					<a href="./index.php">GO BACK TO HOMEPAGE</a>
				</div>
				<div style="float: right;">
					<!-- Audio Stuff... --> 
					<audio id="player"></audio>
					<label id="song">「LA ROUX - BULLETPROOF」</label>&nbsp;&nbsp;
					<a href="#" id="play">PLAY</a> |
					<a href="#" id="backward">&lt;&lt;</a> |
					<a href="#" id="forward">>></a>
				</div>
			</div>
		</div>
		<?php
		if (isset($_SESSION['role']) AND $_SESSION['role'] == "admin")
		{
		?>
			<form method="POST" action="newblogentry.php">
				<div class="newblogentry">
					Title: <br>
					<input type="text" name="title"><br>
					Content:<br>
					<textarea name="content" cols="103" rows="10"><p>Write your stuff here. :D</p></textarea>
				</div>
			
				<div class="inhalt-likes">
					<input type="submit" name="send" value="POST IT!"><?php echo $_GET['msg']; ?>
				</div>
			</form>
		<?php
		}
		else
		{
			echo "<div class='newblogentry'><span class='specialtext-login'>You have<br> <b>NO RIGHTS</b> to post<br> a Blog Post!</span></div>";
		}
		?>
	</div>
		
	<div class="footer">
		<div class="center">
			<i>© 2012 Thomas Siladi. All Right Reserved.</i>
		</div>
	</div>
	
	<script type="text/javascript">	
	$(document).ready(function () {
		$('.dummy').slideUp(0).delay(500).slideDown(1000);
	});
	</script>
</body>
</html>
