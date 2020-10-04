<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];
$patentid = mysqli_real_escape_string($connection,$_POST['patentid']);
$pat_cert = mysqli_real_escape_string($connection,$_POST['pat_cert']);
$exp_date= mysqli_real_escape_string($connection,$_POST['exp_date']);
mysqli_query($connection, "INSERT INTO `patents`(`USN`, `patentid`, `pat_cert`, `exp_date`)
VALUES ('$usn','$patentid', '$pat_cert','$exp_date')")

or die(mysqli_error($connection));
?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="profile_page.php";
</script>
</html>
