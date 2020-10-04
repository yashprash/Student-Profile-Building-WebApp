<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];
$workname = mysqli_real_escape_string($connection,$_POST['workname']);
$desc1 = mysqli_real_escape_string($connection,$_POST['desc1']);
$dur1 = mysqli_real_escape_string($connection,$_POST['dur1']);
$certi1 = mysqli_real_escape_string($connection,$_POST['certi1']);
mysqli_query($connection, "INSERT INTO `workshop`(`USN`, `workname`, `desc1`, `dur1`, `certi1`)
VALUES ('$usn','$workname', '$desc1','$dur1','$certi1')")

or die(mysqli_error($connection));

?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="building_profile_page1.php";
</script>
</html>
