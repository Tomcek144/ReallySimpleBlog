ReallySimpleBlog
by Thomas Siladi
(C) 2012 Thomas Siladi. All Rights Reserved.

You have the RIGHT to use it for your own needs. (Except the songs-Folder, it has it's own README)

You have to create an MySQL Database + a config.inc File to use this Software!
config.inc:
<?php
 
$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost', so you're NOT necessary to change this even this script has already online on the internet.
$dbname   = 'tomhomepage_en'; 	// Your database name.
$username = 'root';             // Your database username.
$password = '<PASSWORD>';      	// Your database password. If your database has no password, leave it empty.
 
// Let's connect to host
mysql_connect($hostname, $username, $password) or DIE('Connection to host failed! The Server may be down!');
// Select the database
mysql_select_db($dbname) or DIE('Database name is not available!');
 
?>
