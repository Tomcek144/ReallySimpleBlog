<?php
// Initialize session
session_start();
// Delete certain sessions
unset($_SESSION['username']);
unset($_SESSION['role']);
// Delete all session variables
session_destroy();

// Jump to login page
header('Location: index.php');
?>
