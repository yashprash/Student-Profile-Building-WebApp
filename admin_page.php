<?php
session_start();
if(!isset($_SESSION['usn']))
{
  header('location:login_page.php');
}
?>
<html>
<head><title>Create your profile page</title>
<style>
.one
{
  background:#ACD0C0;
  height:120px;
  width:100%;
  font-family: impact;
  margin:0px;
  box-shadow: 5px 5px 5px #888888;
  //border-style: solid;
}
.two
{
	font-family:'Trebuchet MS';
	font-size:15px;
	color:black;
	background-color:#66A5AD;
	border-style: none;
	border-collapse:collapse;
	border-size:10pt;
	border-color:'dark-green';
	padding:10px;
	width:1000px;
	margin:0px;
  z-index:100;
  box-shadow: 10px 10px 5px #888888;
}
.four
{
	font-family:'Trebuchet MS';
	font-size:15px;
	color:black;
	background-color:#ACD0C0;
	border-style: none;
	border-collapse:collapse;
	border-size:10pt;
	//border-color:'dark-green';
	padding:10px;
	width:1000px;
	margin:0px;
  z-index:100;
  box-shadow: 10px 10px 5px #888888;
}

table,th,td
{
	padding:10px;
	border-style:outset;
	border-collapse:collapse;
	border-width:1px;
	border-color:black;
}

#three
{
	font-size:20px;
	font-family:'Trebuchet MS';
	color:black;
}

body
{
  background-color: #F1F1F2;
  border: none;
  margin: auto;
  width: auto;
  border-width: 0;
}


.topnav {
    width:100%;
    background-color: #063852;
    overflow: hidden;
    box-shadow: 5px 5px 5px #888888;
    background-size: cover;
  //  border-style:solid;
}

.topnav a {
    float: right;
	display:block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    background-color: #f2f2f2;
    color:#68829E;
}
#PreEdu{
	position:relative ;
	top:20px;
	left:20px;
	z-index:1;
}
</style>
</head>
<body>
<div class="one">
<p style="position:relative; top:5px; left:350px;">
<img src="Logoo.png" alt="Logo" width="100px" height="100px">
</p>
<p style="position: absolute; left:500px; top:0px; color: #4f6457; font-size:40px;">
OnCom<sup style="font-size:20px;">&copy</sup>
</p>
<p style="position:absolute; left:600px; top:80px; color: #063852;">The BMSCE Online Community</p>
</div>
<div class="topnav">
  <a href="logout.php">Logout</a>
</div>
<h1 style="text-shadow: 5px 5px 5px #888888; font-size:50px; position:relative; top:0px; left:500px;">Admin Page</h1>
<table style="position:relative; top:50px; left:300px;">
<tr style="background-color:#063852">
<th>Name</th>
<th>USN</th>
<th>Email</th>
</tr>
<?php
include 'connect.php';
$ntskillsf =mysqli_query($connection,"SELECT Name,USN,Email FROM logincredentials") or die(mysqli_error($connection));
while($ntskillsff = mysqli_fetch_array($ntskillsf))
{
echo "<tr><td>$ntskillsff[0]</td>";
echo "<td>$ntskillsff[1]</td>";
echo "<td>$ntskillsff[2]</td></tr>";
}
?>
</table>
<table style="position:relative; top:100px; left:300px;">
<tr style="background-color:#063852">
<th>USN</th>
<th>Branch</th>
<th>Section</th>
<th>Sem</th>
<th>Bio</th>
</tr>
<?php
include 'connect.php';
$ntskillsf =mysqli_query($connection,"SELECT USN,branch,section,sem,bio FROM basicstuddetails") or die(mysqli_error($connection));
while($ntskillsff = mysqli_fetch_array($ntskillsf))
{
echo "<tr><td>$ntskillsff[0]</td>";
echo "<td>$ntskillsff[1]</td>";
echo "<td>$ntskillsff[2]</td>";
echo "<td>$ntskillsff[3]</td>";
echo "<td>$ntskillsff[4]</td></tr>";
}
?>
</table>
<table style="position:relative; top:150px; left:300px;">
<tr style="background-color:#063852">
<th>USN</th>
<th>School</th>
<th>Level of Study</th>
<th>Grade</th>
</tr>
<?php
include 'connect.php';
$ntskillsf =mysqli_query($connection,"SELECT USN,school,levelofstudy,grade FROM eduname") or die(mysqli_error($connection));
while($ntskillsff = mysqli_fetch_array($ntskillsf))
{
echo "<tr><td>$ntskillsff[0]</td>";
echo "<td>$ntskillsff[1]</td>";
echo "<td>$ntskillsff[2]</td>";
echo "<td>$ntskillsff[3]</td></tr>";
}
?>
</table>
<table style="position:relative; top:200px; left:300px;">
<tr style="background-color:#063852">
<th>USN</th>
<th>Sport</th>
<th>Level</th>
<th>Practising Since</th>
<th>Achievements</th>
</tr>
<?php
include 'connect.php';
$ntskillsf =mysqli_query($connection,"SELECT * FROM sports") or die(mysqli_error($connection));
while($ntskillsff = mysqli_fetch_array($ntskillsf))
{
echo "<tr><td>$ntskillsff[0]</td>";
echo "<td>$ntskillsff[1]</td>";
echo "<td>$ntskillsff[2]</td>";
echo "<td>$ntskillsff[3]</td>";
echo "<td>$ntskillsff[4]</td></tr>";
}
?>
</table>

</body>
</html>
