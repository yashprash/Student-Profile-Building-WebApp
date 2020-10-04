<html>
<?php
include 'connect.php';
session_start();
$_SESSION['usn']=$_POST['usn'];
$name = $_POST['name'];
$usn = $_POST['usn'];
$email = $_POST['email'];
$pass1 = $_POST['p1'];

$result=mysqli_query($connection,"SELECT name from `logincredentials` WHERE USN='$usn'")or die(mysqli_error($connection));
	$row=mysqli_num_rows($result);
if($row!=0)	{
    ?>
	  <script type="text/javascript">alert("Entered USN is already in use!");
    window.location.href ="sign_up_page.php";
    </script>
<?php
	  //header("location:sign_up_page.php");
}
else {
mysqli_query($connection, "INSERT INTO `logincredentials`(`Name`, `USN`, `Email`, `Password`)
VALUES ('$name', '$usn','$email','$pass1')")
or die(mysqli_error($connection));
?>
<script>alert('Student Record Inserted Sucessfully');
window.location.href ="basic_details_page.php";

</script>
<?php
}
?>
</html>
