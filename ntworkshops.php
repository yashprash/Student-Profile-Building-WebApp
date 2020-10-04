<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];

$wstitle = mysqli_real_escape_string($connection,$_POST['wstitle']);
$wsduration = mysqli_real_escape_string($connection,$_POST['wsduration']);
$experience5= mysqli_real_escape_string($connection,$_POST['experience5']);
$certi4= mysqli_real_escape_string($connection,$_POST['certi4']);



mysqli_query($connection, "INSERT INTO `ntworkshops`(`USN`, `wstitle`, `wsduration`, `experience5`,`certi4`)
VALUES ('$usn', '$wstitle','$wsduration','$experience5','$certi4')")
or die(mysqli_error($connection));
?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="building_profile_page2.php";
</script>
</html>
