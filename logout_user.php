<?php
// Start the session
session_start();

// Perform logout actions here
session_destroy();

// Redirect to index page
header("Location: index.php");
exit;
?>