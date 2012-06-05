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
