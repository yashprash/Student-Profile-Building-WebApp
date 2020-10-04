<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];

$skill1 = mysqli_real_escape_string($connection,$_POST['skill1']);
$prac2 = mysqli_real_escape_string($connection,$_POST['prac2']);
$desc6= mysqli_real_escape_string($connection,$_POST['desc6']);



mysqli_query($connection, "INSERT INTO `ntskills`(`USN`, `skill1`, `prac2`, `desc6`)
VALUES ('$usn', '$skill1','$prac2','$desc6')")
or die(mysqli_error($connection));
?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="building_profile_page2.php";
</script>
</html>
