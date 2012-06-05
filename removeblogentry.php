<?php
session_start();
include('config.inc');

if ($_SESSION['role'] == "admin" && isset($_GET['id']))
{
	// Fetch the id of the Post and delete it.
	mysql_query("DELETE FROM posts WHERE id = '" . $_GET['id'] . "'");
	
	// Check if there's no loose number...
	/*
	$id = $_GET['id'];
	$ai = $id + 1;
	$array = mysql_fetch_array(mysql_query("SELECT title FROM posts WHERE id='" . $ai . "'"));
	if ($array['title'] != "")
	{
		$count = mysql_num_rows(mysql_query("SELECT * FROM posts"));
		for ($i = $count; $i > $_GET['id']; i--)
		{
			$ia = $i - 1;
			
			$post = mysql_fetch_array(mysql_query("SELECT title, content, author, date FROM posts WHERE id=" . $i));
			mysql_query("DELETE FROM posts WHERE id = '" . $ia . "'");
			mysql_query("INSERT INTO posts (id, title, content, author, date) VALUES ('" . $ia . "', '" . $post['title'] . "', '" . $post['content'] . "', '" . $post['author'] . "', '" . $post['date'] . "')");
		}
	}
	*/
	
	//Redirect it back to the Homepage
	header("location:index.php");
}
else
{
	//Okay... User tried to delete the Post but maybe he's not in the ADMIN-Group... Who knows?
	header("location:index.php");
}
?>