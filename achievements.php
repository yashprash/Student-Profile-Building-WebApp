<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];
$field = mysqli_real_escape_string($connection,$_POST['field']);
$year = mysqli_real_escape_string($connection,$_POST['year']);
$details = mysqli_real_escape_string($connection,$_POST['details']);
$experience2 = mysqli_real_escape_string($connection,$_POST['experience2']);
mysqli_query($connection, "INSERT INTO `achievements`(`USN`, `field`, `year`, `details`,`experience2`)
VALUES ('$usn','$field', '$year','$details','$experience2')")

or die(mysqli_error($connection));
?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="profile_page.php";
</script>
</html>
