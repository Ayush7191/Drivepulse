<?php
// Start the session
session_start();

// Destroy all session data
session_unset();
session_destroy();

// Redirect to login page
header("Location: adminlogin.php");
exit(); // Ensure no further code is executed after redirection
?>
