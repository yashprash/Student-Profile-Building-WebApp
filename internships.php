<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];
$internname = mysqli_real_escape_string($connection,$_POST['internname']);
$desc2 = mysqli_real_escape_string($connection,$_POST['desc2']);
$dur2 = mysqli_real_escape_string($connection,$_POST['dur2']);
$certi2 = mysqli_real_escape_string($connection,$_POST['certi2']);
mysqli_query($connection, "INSERT INTO `internships`(`USN`, `internname`, `desc2`, `dur2`, `certi2`)
VALUES ('$usn','$internname', '$desc2','$dur2','$certi2')")

or die(mysqli_error($connection));

?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="profile_page.php";
</script>
</html>
