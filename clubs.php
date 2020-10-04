<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];

$ntclubname = mysqli_real_escape_string($connection,$_POST['ntclubname']);
$desc5 = mysqli_real_escape_string($connection,$_POST['desc5']);
$brag1= mysqli_real_escape_string($connection,$_POST['brag1']);



mysqli_query($connection, "INSERT INTO `clubs`(`USN`, `ntclubname`, `desc5`, `brag1`)
VALUES ('$usn', '$ntclubname','$desc5','$brag1')")
or die(mysqli_error($connection));
?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="building_profile_page2.php";
</script>
</html>
