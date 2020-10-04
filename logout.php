<?php
session_start();
session_unset($_SESSION['usn']);
session_destroy();
header('location:home_page.php');
?>
