<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];
$eduname = mysqli_real_escape_string($connection,$_POST['eduname']);
$level = mysqli_real_escape_string($connection,$_POST['level']);
$grade = mysqli_real_escape_string($connection,$_POST['grade']);
mysqli_query($connection, "INSERT INTO `eduname`(`USN`, `school`, `levelofstudy`, `grade`)
VALUES ('$usn', '$eduname','$level','$grade')")
or die(mysqli_error($connection));
?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="building_profile_page1.php";
</script>
</html>
