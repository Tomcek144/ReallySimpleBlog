<?php
 
$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to change this even this script has already online on the internet.
$dbname   = 'tomhomepage_en'; 	// Your database name.
$username = 'root';             // Your database username.
$password = 'Speedilek';      	// Your database password. If your database has no password, leave it empty.
 
// Let's connect to host
mysql_connect($hostname, $username, $password) or DIE('Connection to host failed! The Server may be down!<br>&#12507;&#12473;&#12488;&#12408;&#12398;&#25509;&#32154;&#12395;&#22833;&#25943;&#12375;&#12414;&#12375;&#12383;&#65281;&#12469;&#12540;&#12496;&#12364;&#12480;&#12454;&#12531;&#12375;&#12390;&#12356;&#12427;&#21487;&#33021;&#24615;&#12364;&#12354;&#12426;&#12414;&#12377;&#12290;');
// Select the database
mysql_select_db($dbname) or DIE('Database name is not available!<br>&#12487;&#12540;&#12479;&#12505;&#12540;&#12473;&#21517;&#12364;&#20351;&#29992;&#21487;&#33021;&#12391;&#12399;&#12354;&#12426;&#12414;&#12379;&#12435;&#65281;');
 
?>
