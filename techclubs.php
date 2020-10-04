<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];
$clubname = mysqli_real_escape_string($connection,$_POST['clubname']);
$category = mysqli_real_escape_string($connection,$_POST['category']);
$about= mysqli_real_escape_string($connection,$_POST['about']);
mysqli_query($connection, "INSERT INTO `techclubs`(`USN`, `clubname`, `category`, `about`)
VALUES ('$usn','$clubname', '$category','$about')")

or die(mysqli_error($connection));
?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="profile_page.php";
</script>
</html>
