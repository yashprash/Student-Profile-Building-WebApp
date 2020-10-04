<html>
<?php
include 'connect.php';
session_start();
$usn = $_SESSION['usn'];
$ProjectTopic = mysqli_real_escape_string($connection,$_POST['ProjectTopic']);
$desc3 = mysqli_real_escape_string($connection,$_POST['desc3']);
$dur3 = mysqli_real_escape_string($connection,$_POST['dur3']);
$skills = mysqli_real_escape_string($connection,$_POST['skills']);
mysqli_query($connection, "INSERT INTO `projects`(`USN`, `ProjectTopic`, `desc3`, `dur3`, `skills`)
VALUES ('$usn','$ProjectTopic', '$desc3','$dur3','$skills')")

or die(mysqli_error($connection));

?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="profile_page.php";
</script>
</html>
