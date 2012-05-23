<?php
// Inialize session
session_start();
// Include database connection settings
include('config.inc');
// Check if the User is in our database, if yes, get the Role of the user.
$check = mysql_query("SELECT * FROM users WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string(md5($_POST['password'])) . "')");

// Check username and password match
if (mysql_num_rows($check) == 1) 
{
	// Set username session variable
	$_SESSION['username'] = $_POST['username'];
	
	// Get the role of the User and set it into the SESSION
	$role = mysql_fetch_array(mysql_query("SELECT role FROM users WHERE (username = '" . $_POST['username'] . "')"));
	$_SESSION['role'] = $role['role'];
	
	// Jump to secured page
	header('Location: index.php');
}
else 
{
	// Jump to login page
	header("Location: login.php?msg=Wrong Username or Password!");
}
?>
