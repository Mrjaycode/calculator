<?php
ob_start();

session_name('calcspeed_session');
session_start();

// Remove all session variables
$_SESSION = [];

// Destroy session
session_destroy();

// Redirect to login page
header("Location: index.php");
exit;
?>