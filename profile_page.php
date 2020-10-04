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
.six
{
  	border-color:black;
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
th{
  color:white;
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
	<a href="building_profile_page1.php">Add Technical Details</a>
	<a href="building_profile_page2.php">Add Non Technical Details</a>
</div>
<p style="position:relative;top:20px; left:650px;">
  <?php
  include 'connect.php';
  $usn=$_SESSION['usn'];
$file_name=mysqli_query($connection,"SELECT file FROM `basicstuddetails` WHERE USN='$usn'");
$file_namef=mysqli_fetch_array($file_name);
echo "<img src='$file_namef[0]' width='120'style='box-shadow: 10px 10px 5px #888888; border:solid;' height='150'/>";
?>
</p>
<div class="two" style="position:relative; top:20px; left:200px;">
<?php
echo "<h1  style='position:relative; top:0px;  font-size:35px;text-align:center; font-family:Georgia; color:black'>";
$name=mysqli_query($connection, "SELECT Name FROM logincredentials WHERE USN = '$usn'") or die(mysqli_error($connection));
$namef = mysqli_fetch_array($name);
  echo "$namef[0] </h1>";
  echo "<p style='position:relative; top:0px; width:30ex; left:380px; text-align:center; font-size:15px; font-family:Georgia; color:black'><i>";
  $bio=mysqli_query($connection, "SELECT bio FROM basicstuddetails WHERE USN = '$usn'") or die(mysqli_error($connection));
  $biof = mysqli_fetch_array($bio);
    echo "$biof[0] </i></p>";
?>

<p style='position:relative;top:10px; left:360px;'><b>Student at BMS College of Enginneering</b></p>
<?php
echo "<p style='position:relative; top:0px; left:385px; font-size:15px; font-family:Georgia; color:black'>";
$branch=mysqli_query($connection, "SELECT branch FROM basicstuddetails WHERE USN = '$usn'") or die(mysqli_error($connection));
$branchf = mysqli_fetch_array($branch);
  echo "<span style='text-transform:uppercase'>$branchf[0]</span>". " department ---- Section:  ";
//echo "<p style='position:relative; top:20px; left:400px; font-size:15px; font-family:Georgia; color:black'>";
$sem=mysqli_query($connection, "SELECT sem FROM basicstuddetails WHERE USN = '$usn'") or die(mysqli_error($connection));
$semf = mysqli_fetch_array($sem);
  echo "$semf[0] ";
$sec=mysqli_query($connection, "SELECT section FROM basicstuddetails WHERE USN = '$usn'") or die(mysqli_error($connection));
$secf = mysqli_fetch_array($sec);
  echo "$secf[0] </p>";
  ?>
</div><br />
<div class="four" style="position:relative; top:20px; left:200px;">
<h1 style='position:relative; top:0px; left:50px; font-size:35px; font-family:Georgia; color:black'>Technical Details</h1>
<span id="three">1. Previous Education:</span>
<table  id="PreEdu">
<tr style="background-color:#063852">
<th>School/College Name</th>
<th>Level of Study</th>
<th>Grade Scored</th>
</tr>

<?php
include 'connect.php';
$edunamef =mysqli_query($connection,"SELECT school,levelofstudy,grade FROM eduname WHERE USN = '$usn'") or die(mysqli_error($connection));
while($edunameff = mysqli_fetch_array($edunamef) )
{
  echo "<tr><td>$edunameff[0]</td>";
  echo "<td>$edunameff[1]</td>";
  echo "<td>$edunameff[2]</td></tr>";
  }
    ?>
</table>
<br/><br/>

<br/>
<br/>
<br/>
<hr/><br/>

<span id="three">2. Technical Workshops:</span>
<br/>
<table id="Workshops" >

<tr style="background-color:#063852">
<th>Workshop Title</th>
<th>Description</th>
<th>Duration</th>
<th>Add Certificate</th>
</tr>
<?php

include 'connect.php';
$workshopf =mysqli_query($connection,"SELECT workname,desc1,dur1,certi1 FROM workshop WHERE USN = '$usn'") or die(mysqli_error($connection));
while($workshopff = mysqli_fetch_array($workshopf) )
{
  echo "<tr><td>$workshopff[0]</td>";
  echo "<td>$workshopff[1]</td>";
  echo "<td>$workshopff[2]</td>";
   echo "<td>$workshopff[3]</td></tr>";
  }
    ?>
</table>
<br/><br/>

<br/>
<br/>
<br/>
<hr/><br/>


<span id="three">3. Technical Internships:</span>
<br/>
<table id="Internships">

<tr style="background-color:#063852">
<th>Internship Title/Post</th>
<th>Description</th>
<th>Duration</th>
<th>Add Certificate</th>
</tr>
<?php

include 'connect.php';
$internshipsf =mysqli_query($connection,"SELECT internname,desc2,dur2,certi2 FROM internships WHERE USN = '$usn'") or die(mysqli_error($connection));
while($internshipsff = mysqli_fetch_array($internshipsf) )
{
  echo "<tr><td>$internshipsff[0]</td>";
  echo "<td>$internshipsff[1]</td>";
  echo "<td>$internshipsff[2]</td>";
   echo "<td>$internshipsff[3]</td></tr>";
  }
    ?>

</table>
<br/><br/>

<br/>
<br/>
<br/>
<hr/><br/>


<span id="three">4. Certified Courses:</span>
<br/>
<table id="Certificate">

<tr style="background-color:#063852">
<th>Course Title</th>
<th>Duration</th>
<th>Experience</th>
<th>Add Certificate</th>
</tr>
<?php

include 'connect.php';
$coursesf =mysqli_query($connection,"SELECT CourseTitle,c_duration,experience1,certi3 FROM courses WHERE USN = '$usn'") or die(mysqli_error($connection));
while($coursesff = mysqli_fetch_array($coursesf) )
{
  echo "<tr><td>$coursesff[0]</td>";
  echo "<td>$coursesff[1]</td>";
  echo "<td>$coursesff[2]</td>";
   echo "<td>$coursesff[3]</td></tr>";
  }
    ?>

</table>
<br/><br/>

<br/>
<br/>
<br/>
<hr/><br/>

<span id="three">5. Projects:</span>
<br/>
<table id="Project">

<tr style="background-color:#063852">
<th>Project Topic</th>
<th>Description</th>
<th>Duration</th>
<th>Skills Implemented</th>
</tr>
<?php

include 'connect.php';
$projectsf =mysqli_query($connection,"SELECT ProjectTopic,desc3,dur3,skills FROM projects WHERE USN = '$usn'") or die(mysqli_error($connection));
while($projectsff = mysqli_fetch_array($projectsf) )
{
echo "<tr><td>$projectsff[0]</td>";
echo "<td>$projectsff[1]</td>";
echo "<td>$projectsff[2]</td>";
 echo "<td>$projectsff[3]</td></tr>";
}
  ?>

</table>
<br/><br/>
<br/>
<br/>
<br/>
<hr/><br/>


<span id="three">6. Patents:</span>
<br/>
<table id="Patent">

<tr style="background-color:#063852">
<th>Patent Id</th>
<th>Certificate Link</th>
<th>Patent Expiry Date</th>
</tr>
<?php

include 'connect.php';
$patentsf =mysqli_query($connection,"SELECT patentid,pat_cert,exp_date FROM patents WHERE USN = '$usn'") or die(mysqli_error($connection));
while($patentsff = mysqli_fetch_array($patentsf) )
{
  echo "<tr><td>$patentsff[0]</td>";
  echo "<td>$patentsff[1]</td>";
  echo "<td>$patentsff[2]</td></tr>";
  }
    ?>

</table>
<br/><br/>

<br/>
<br/>
<br/>
<hr/><br/>

<span id="three">7. Achievements and Awards:</span>
<br/>
<table id="Achievement">

<tr style="background-color:#063852">
<th>Field of Achievement</th>
<th>Year of Achievement</th>
<th>Details</th>
<th>Experience</th>
</tr>
<?php

include 'connect.php';
$achievementsf =mysqli_query($connection,"SELECT field,year,details,experience2 FROM achievements WHERE USN = '$usn'") or die(mysqli_error($connection));
while($achievementsff = mysqli_fetch_array($achievementsf) )
{
echo "<tr><td>$achievementsff[0]</td>";
echo "<td>$achievementsff[1]</td>";
echo "<td>$achievementsff[2]</td>";
echo "<td>$achievementsff[3]</td></tr>";
}
  ?>
</table>
<br/><br/>

<br/>
<br/>
<br/>
<hr/><br/>

<span id="three">8. Technical College Clubs:</span>
<table id="TechClub">

<tr style="background-color:#063852">
<th>Club Name</th>
<th>Club Category</th>
<th>Brag about it!</th>
</tr>

	<?php

include 'connect.php';
$techclubsf =mysqli_query($connection,"SELECT clubname,category,about FROM techclubs WHERE USN = '$usn'") or die(mysqli_error($connection));
while($techclubsff = mysqli_fetch_array($techclubsf) )
{
  echo "<tr><td>$techclubsff[0]</td>";
  echo "<td>$techclubsff[1]</td>";
  echo "<td>$techclubsff[2]</td></tr>";
  }
    ?>
</table>
<br/><br/>
<br/><br/>


<hr/>
  </div>
  <br />
  <div class="four" style="position:relative; top:20px; left:200px;">
<h1 style='position:relative; top:0px; left:50px; font-size:35px; font-family:Georgia; color:black'>Non-Technical Details</h1>

<span id="three">1. Clubs:</span>
<table id="club">
<tr style="background-color:#063852">
<th>Club name</th>
<th>Description</th>
<th>Brag about it!</th>
</tr>

<?php

include 'connect.php';
$ntclubnamef =mysqli_query($connection,"SELECT ntclubname,desc5,brag1 FROM clubs WHERE USN = '$usn'") or die(mysqli_error($connection));
while($ntclubnameff = mysqli_fetch_array($ntclubnamef))
{
echo "<tr><td>$ntclubnameff[0]</td>";
echo "<td>$ntclubnameff[1]</td>";
echo "<td>$ntclubnameff[2]</td></tr>";
}
  ?>
</table>
<br/><br/>

<br/>
<br/>
<br/>
<hr/><br/>

<span id="three">2. Sports:</span>
<table id="Sports">
<tr style="background-color:#063852">
<th>Sport</th>
<th>Excellence Level</th>
<th>Practising since?</th>
<th>Achievements</th>
</tr>
<?php

include 'connect.php';
$sportsf =mysqli_query($connection,"SELECT sports,level1,prac,achieve1 FROM sports WHERE USN = '$usn'") or die(mysqli_error($connection));
while($sportsff = mysqli_fetch_array($sportsf))
{
echo "<tr><td>$sportsff[0]</td>";
echo "<td>$sportsff[1]</td>";
echo "<td>$sportsff[2]</td>";
echo "<td>$sportsff[3]</td></tr>";
}
  ?>
</table>
<br/><br/>

<br/>
<br/>
<br/>
<hr/><br/>

<span id="three">3. Workshops:</span>
<table id="Workshop">
<tr style="background-color:#063852">
<th>Workshop Title</th>
<th>Duration</th>
<th>Experience</th>
<th>Add Certificate</th>
</tr>
<?php

include 'connect.php';
$ntworkshopsf =mysqli_query($connection,"SELECT wstitle,wsduration,experience5,certi4 FROM ntworkshops WHERE USN = '$usn'") or die(mysqli_error($connection));
while($ntworkshopsff = mysqli_fetch_array($ntworkshopsf))
{
echo "<tr><td>$ntworkshopsff[0]</td>";
echo "<td>$ntworkshopsff[1]</td>";
echo "<td>$ntworkshopsff[2]</td>";
echo "<td>$ntworkshopsff[3]</td></tr>";
}
  ?>
</table>
<br/><br/>

<br/>
<br/>
<br/>
<hr/><br/>

<span id="three">4. Non-Technical Skills:</span>
<table id="Skills">
<tr style="background-color:#063852">
<th>Skill</th>
<th>Practising Since?</th>
<th>Description</th>
</tr>
<?php

include 'connect.php';
$ntskillsf =mysqli_query($connection,"SELECT skill1,prac2,desc6 FROM ntskills WHERE USN = '$usn'") or die(mysqli_error($connection));
while($ntskillsff = mysqli_fetch_array($ntskillsf))
{
echo "<tr><td>$ntskillsff[0]</td>";
echo "<td>$ntskillsff[1]</td>";
echo "<td>$ntskillsff[2]</td></tr>";
}
  ?>
</table>
<br/><br/>


<hr/>

</div>
<br/>
<br/>
<br/>
</body>
</html>
