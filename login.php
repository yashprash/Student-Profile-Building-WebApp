<html>
<?php
session_start();
include 'connect.php';
$USN=$_POST['usn'];
$password=$_POST['p1'];

$query = "SELECT * FROM logincredentials
WHERE USN='$USN' AND Password='$password'";
$result=mysqli_query($connection,$query);
if(!$result )
{
die('Could not retrieve data: '
.mysqli_error($connection));
}

$count= mysqli_num_rows($result);
if($count==1)
{
$res = mysqli_fetch_array($result);
if($res[1]=="admin" && $res[3]=="admin123")
{
  $_SESSION['usn']=$_POST['usn'];
header("location:admin_page.php");
}
else
{
$_SESSION['usn']=$_POST['usn'];
header("location:profile_page.php");
}
}
else {
   session_destroy();
   ?>
   <script type="text/javascript">alert('Your USN or Password is invalid');
   window.location.href ="login_page.php";
   </script>
   <?php
   }
?>
</html>
