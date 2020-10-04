<?php
$dbhost = 'localhost';
$dbuser = 'viveksk';
$dbpass = 'vivek123';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$connection ) {
die('Could not connect to Server'
.mysqli_error($connection));
}

$dbhandle=mysqli_select_db($connection, 'student_details');
if(!$dbhandle) {
die('Database Selection Problem'
.mysqli_error($connection));
}
?>
