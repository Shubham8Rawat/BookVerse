<?php
  session_start();
  // Destroy the session
  session_destroy();
  // Redirect the user to the homepage or any other page
  header("Location: index.php"); // Adjust the actual homepage URL
  exit();
?>
