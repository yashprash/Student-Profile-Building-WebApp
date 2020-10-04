
<?php
include 'connect.php';
session_start();
$usn=$_SESSION['usn'];
$id=$_GET['id'];
$propic=mysqli_query($connection, "SELECT profilepic FROM basicstuddetails WHERE USN = '$usn'") or die(mysqli_error($connection));
$propicf=mysqli_fetch_assoc($propic);
$a =  $propicf['profilepic'];
header("Content-type: image/jpg");
echo file_get_contents("$a");
?>
