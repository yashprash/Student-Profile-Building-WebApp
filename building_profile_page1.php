<html>
<head><title>Create your profile page</title>
<style>
.one
{
  background:#ACD0C0;
  height:120px;
  width:auto;
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
	border-style:none;
	border-collapse:collapse;
	border-size:10pt;
	border-color:'dark-green';
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
  margin: auto;
}

th{
  color:white;
}
tr{
  background-color:#063852
}
.topnav {
    background-color: #063852;
    overflow: hidden;
    box-shadow: 5px 5px 5px #888888;
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
<script type="text/javascript">


function addedu()
{
  document.getElementById("PreEdu").innerHTML+="<tr><td><input type='text' name='eduname' id='hi' size='30' required/></td><td><input type='text' name='level' size='30' required/></td><td><input type='text' name='grade' size='10' required/></td><td><input type='submit' name='AddEdu' value='Save'/></td></tr>";
  var elem=document.getElementById("AddEdu");
  elem.parentNode.removeChild(elem);
}

function addwork()
{

  document.getElementById("Workshops").innerHTML+="<tr><td><textarea name='workname' rows='3' cols='20' required/></textarea></td><td><textarea name='desc1' rows='3' cols='40' required></textarea></td><td><textarea name='dur1' rows='3' cols='15' required></textarea></td><td><input type='text' name='certi1' size='20' required/></td><td><input type='submit' name='AddWork' value='Save'/></td></tr>";
  var elem=document.getElementById("AddWork");
  elem.parentNode.removeChild(elem);
}
function addintern()
{

   document.getElementById("Internships").innerHTML+="<tr><td><textarea name='internname' rows='3' cols='15' required/></textarea></td><td><textarea name='desc2' rows='3' cols='40' required></textarea></td><td><textarea name='dur2' rows='3' cols='10' required></textarea></td><td><input type='text' name='certi2' required/></td><td><input type='submit' name='AddIntern' value='Save'/></td></tr>";
   var elem=document.getElementById("AddIntern");
   elem.parentNode.removeChild(elem);
}
function addcert()
{

	document.getElementById("Certificate").innerHTML+="<tr><td><textarea name='CourseTitle' rows='3' cols='15' required/></textarea></td><td><textarea name='c_duration' rows='3' cols='40' required></textarea></td><td><textarea name='experience1' rows='3' cols='20' required></textarea></td><td><input type='text' name='certi3' required/></td><td><input type='submit' name='AddCourse' value='Save'/></td></tr>";
  var elem=document.getElementById("AddCert");
  elem.parentNode.removeChild(elem);
 }
function addproj()
{

	document.getElementById("Project").innerHTML+="<tr><td><textarea name='ProjectTopic' rows='3' cols='15' required/></textarea></td><td><textarea name='desc3' rows='3' cols='40' required></textarea></td><td><textarea name='dur3' rows='3' cols='15' required></textarea></td></textarea></td><td><textarea name='skills' rows='3' cols='20' required></textarea></td><td><input type='submit' name='AddProj' value='Save'/></td></tr>";
  var elem=document.getElementById("AddProj");
  elem.parentNode.removeChild(elem);
}

function addpatent()
{

	document.getElementById("Patent").innerHTML+="<tr><td><textarea name='patentid' rows='3' cols='15' required/></textarea></td><td><textarea name='pat_cert' rows='3' cols='40' required></textarea></td><td><textarea name='exp_date' size='20' required></textarea></td><td><input type='submit' name='AddPatent' value='Save'/></td></tr>";
  var elem=document.getElementById("AddPatent");
  elem.parentNode.removeChild(elem);
}
function addachieve()
{

	document.getElementById("Achievement").innerHTML+="<tr><td><textarea name='field' rows='3' cols='20' required/></textarea></td><td><input type='text' name='year' size='20' required></textarea></td><td><textarea name='details' rows='3' cols='25' required></textarea></td><td><textarea name='experience2' rows='3' cols='25' required></textarea></td><td><input type='submit' name='AddAchieve' value='Save';'/></td></tr>";
  var elem=document.getElementById("AddAchieve");
  elem.parentNode.removeChild(elem);
}
function addclub()
{

	document.getElementById("TechClub").innerHTML+="<tr><td><textarea name='clubname' rows='3' cols='15' required/></textarea></td><td><textarea name='category' rows='3' cols='40' required></textarea></td><td><textarea name='about' rows='3' cols='10' required></textarea></td><td><input type='submit' name='AddClub' value='Save'/></td></tr>";
  var elem=document.getElementById("AddClub");
  elem.parentNode.removeChild(elem);
}


/*function delay()
{
	for(var i=1;i<9999999;i++)
	{
	}
}*/

</script>
</head>
<body>
<div class="one">
<p style="position:relative; top:5px; left:350px;">
<img src="Logoo.png" alt="Logo" width="100px" height="100px" />
</p>
<p style="position: absolute; left:500px; top:0px; color: #4f6457; font-size:40px;">
OnCom<sup style="font-size:20px;"> &copy; </sup>
</p>
<p style="position:absolute; left:600px; top:80px; color: #063852;">The BMSCE Online Community</p>
</div>
<div class="topnav">
   	<a href="profile_page.php">Profile</a>

</div>
<h1  style="animation-name: springy-text; animation-duration: 2s; position:relative; top:10px;text-shadow: 5px 5px 5px #888888; left:170px; font-size:40px; font-family:Georgia; color:black; ">Technical Details</h1>
<div class="two" style="position:relative; top:20px; left:150px;">
<form name="PreEdu" action="eduname.php" method="POST">
<span id="three">1. Previous Education:</span>
<table id="PreEdu">
<tr>
<th>School/College Name</th>
<th>Level of Study</th>
<th>Grade Scored</th>
</tr>

</table>
<br/><br/>
<input type="button" name="AddEdu" id="AddEdu" value="Add School/College" onclick="addedu();"/>
</form>
<br/>
<br/>
<br/>
<hr/><br/>
<form name="Workshops" action="workshop.php" method="POST">
<span id="three">2. Technical Workshops:</span>
<br/>
<table id="Workshops">

<tr>
<th>Workshop Title</th>
<th>Description</th>
<th>Duration</th>
<th>Add Certificate</th>
</tr>

</table>
<br/><br/>

<input type="button" name="AddWork" id="AddWork" value="Add Workshop" onclick="addwork();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>

<form name="Internships" action="internships.php" method="POST">
<span id="three">3. Technical Internships:</span>
<br/>
<table id="Internships">

<tr>
<th>Internship Title/Post</th>
<th>Description</th>
<th>Duration</th>
<th>Add Certificate</th>
</tr>

</table>
<br/><br/>

<input type="button" name="AddIntern" id="AddIntern" value="Add Internship" onclick="addintern();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>

<form name="Certificate" action="courses.php" method="POST">
<span id="three">4. Certified Courses:</span>
<br/>
<table id="Certificate">

<tr>
<th>Course Title</th>
<th>Duration</th>
<th>Experience</th>
<th>Add Certificate</th>
</tr>

</table>
<br/><br/>

<input type="button" name="AddCert" id="AddCert" value="Add Certificate Link" onclick="addcert();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>

<form name="Project" action="projects.php" method="POST">
<span id="three">5. Projects:</span>
<br/>
<table id="Project">

<tr>
<th>Project Topic</th>
<th>Description</th>
<th>Duration</th>
<th>Skills Implemented</th>
</tr>

</table>
<br/><br/>

<input type="button" name="AddProj" id="AddProj" value="Add Project" onclick="addproj();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>


<form name="Patent" action="patents.php" method="POST">
<span id="three">6. Patents:</span>
<br/>
<table id="Patent">

<tr>
<th>Patent Id</th>
<th>Certificate Link</th>
<th>Patent Expiry Date</th>
</tr>

</table>
<br/><br/>

<input type="button" name="AddPatent" id="AddPatent" value="Add Paper" onclick="addpatent();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>

<form name="Achievement" action="achievements.php" method="POST">
<span id="three">7. Achievements and Awards:</span>
<br/>
<table id="Achievement">

<tr>
<th>Field of Achievement</th>
<th>Year of Achievement</th>
<th>Details</th>
<th>Experience</th>
</tr>

</table>
<br/><br/>

<input type="button" name="AddAchieve" id="AddAchieve" value="Add Achievements and Awards" onclick="addachieve();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>

<form name="TechClub" action="techclubs.php" method="POST">
<span id="three">8. Technical College Clubs:</span>
<table id="TechClub">

<tr>
<th>Club Name</th>
<th>Club Category</th>
<th>Brag about it!</th>
</tr>

</table>
<br/><br/>

<input type="button" name="AddClub" id="AddClub" value="Add Club" onclick="addclub();">
</form>

</div>
<br/>
<br/>
<br/>
</body>
</html>
