<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];
$sports = mysqli_real_escape_string($connection,$_POST['sport']);
$level1 = mysqli_real_escape_string($connection,$_POST['level1']);
$prac= mysqli_real_escape_string($connection,$_POST['prac']);
$achieve1= mysqli_real_escape_string($connection,$_POST['achieve1']);
echo $sports;
mysqli_query($connection, "INSERT INTO `sports`(`USN`, `sports`,`level1`, `prac`,`achieve1`)
VALUES ('$usn','$sports','$level1','$prac','$achieve1')")
or die(mysqli_error($connection));
?>
<script>alert('Student Record Inserted Sucessfully');
//window.location.href ="building_profile_page2.php";
</script>
</html>
