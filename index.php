<?php
session_start();
include('config.inc');
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Website of Thomas Siladi</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
</head>
<body>
	<!-- Facebook's JavaScript SDK - Needed for Like-Button and valid HTML5 -->
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '223786784325007', // App ID
				channelUrl : '//www.thomassiladi.tk/channel.html', // Channel File
				status     : true, // check login status
				cookie     : true, // enable cookies to allow the server to access the session
				xfbml      : true  // parse XFBML
			});
		};

		// Load the SDK Asynchronously
		(function(d){
			var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement('script'); js.id = id; js.async = true;
			js.src = "//connect.facebook.net/en_US/all.js";
			ref.parentNode.insertBefore(js, ref);
		}(document));
	</script>

	<div class="header">
		<img src="./WEBandDESIGN.png" alt="LOGO">
	</div>
	
	<div class="dummy">
		<div class="menu">
			<div class="menu_nav">
				<div style="float: left;">
					<a href="../index.html"><img src="../flags/gb.png" alt=""></a>&nbsp;<b>NAVIGATION</b>
				</div>
				<div style="float: right;">
					<?php
					if ($_SESSION['role'] == "admin")
					{
						echo "<a href='./newblogentry.php'>CREATE A NEW BLOG ENTRY</a>&nbsp;|&nbsp;";
					}
					
					if (isset($_SESSION['role']))
					{
						echo "<a href='./logout.php'>LOGOUT</a>";
					}
					else
					{
						echo "<a href='./login.php'>LOGIN</a>";
					}
					?>
				</div>
			</div>
			<div class="menu_nav-text">
				<div style="float: left;">
					<a id="home" title="Back Home!">HOME</a> |
					<a id="about" title="About this site!">ABOUT</a> |
					<a id="impress" title="Impress!">IMPRINT</a>
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
		
		<div class="home" id="homeContent">
			<?php
			$count_rows = mysql_num_rows(mysql_query("SELECT * FROM posts"));
			for ($i = 1; $i < $count_rows + 1; $i++)
			{
				$post = mysql_fetch_array(mysql_query("SELECT title, content, author, date FROM posts WHERE id=" . $i));
				
				echo "<h1>" . $post['title'] . "</h1>\n";
				echo "<h2><i>" . $post['date'] . "</i>&nbsp;|&nbsp;" . $post['author'] . " wrote this post.</h2><hr>\n";
				echo $post['content'] . "\n";
			}
			?>
		</div>
		
		<div class="impress">
			I, <b><i>Thomas Siladi</i></b>, made this site.<br>
			<br>
			(C) 2012 Thomas Siladi<br>
			Austria / Croatia<br>
			<a href="mailto:thomas.siladi@gmail.com">thomas.siladi@gmail.com</a>
		</div>
		
		<div class="about">
			Howdy! This is my Test-Site that I made to test my HTML5/CSS3/jQuery/MySQL Skills.<br>
			Although this Site should look good, everyone should also be able to reuse it. I hope that you will have a lot of fun looking at all Categories and my Blog Posts! :D
		</div>
		
		<div class="inhalt-likes">
			<!-- Google's PlusOne-Button -->
			<div class="g-plusone" data-annotation="inline"></div><br>
			<!-- Facebook's valide HTML5 Like-Button -->
			<div class="fb-like" data-href="http://thomassiladi.tk/gb/index.php" data-send="false" data-width="400" data-show-faces="false" data-font="verdana"></div>
		</div>
	</div>
		
	<div class="footer">
		<div class="center">
			<i>© 2012 Thomas Siladi. All Right Reserved.</i>
		</div>
	</div>
	
	<!-- All the other JavaScript-Stuff are in a seperate File. -->
	<script src="./func.js"></script>
</body>
</html>