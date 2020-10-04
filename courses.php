<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];
$CourseTitle = mysqli_real_escape_string($connection,$_POST['CourseTitle']);
$c_duration = mysqli_real_escape_string($connection,$_POST['c_duration']);
$experience1 = mysqli_real_escape_string($connection,$_POST['experience1']);
$certi3 = mysqli_real_escape_string($connection,$_POST['certi3']);
mysqli_query($connection, "INSERT INTO `courses`(`USN`, `CourseTitle`, `c_duration`, `experience1`, `certi3`)
VALUES ('$usn','$CourseTitle', '$c_duration','$experience1','$certi3')")

or die(mysqli_error($connection));

?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="profile_page.php";
</script>
</html>
