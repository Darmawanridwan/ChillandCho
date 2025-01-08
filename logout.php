<?php
session_start();
session_unset();
session_destroy();

// Arahkan ke halaman login setelah logout
header("Location: login.php");
exit;
?>

