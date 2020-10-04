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


.topnav {
    background-color: #063852;
    overflow: hidden;
    margin: auto;
    box-shadow: 5px 5px 5px #888888;
  //  border-style:solid;
}
th{
  color:white;
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
tr{
  background-color:#063852
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
var i = 0,j = 0,k = 0;
function addclub()
{
	document.getElementById("club").innerHTML+="<tr><td><textarea name='ntclubname' rows='2' cols='15' required/></textarea></td><td><textarea name='desc5' rows='4' cols='40' required></textarea></td><td><textarea name='brag1' rows='4' cols='40' required></textarea></td><td><input type='submit' name='Club' value='Save'/></td></tr>";
    var elem=document.getElementById("1");
    elem.parentNode.removeChild(elem);
}
function addsport()
{
	document.getElementById("Sports").innerHTML+="<tr><td><input type='text' name='sport' size='20' required/></td><td><input type='text' name='level1' size='15' required/></td><td><input type='text' name='prac' size='15' required/></td><td><textarea name='achieve1' rows='3' cols='40' required></textarea></td><td><input type='submit' name='Sports' value='Save'/></td></tr>";
    var elem=document.getElementById("2");
    elem.parentNode.removeChild(elem);
}
function addworkshop()
{
	document.getElementById("Workshop").innerHTML+="<tr><td><textarea name='wstitle' rows='2' cols='15' required/></textarea></td><td><textarea name='wsduration' rows='1' cols='20' required></textarea></td><td><textarea name='experience5' rows='4' cols='35' required></textarea></td><td><textarea name='certi4' placeholder='Enter the link.' rows='3' columns='30' required></textarea></td><td><input type='submit' name='Workshop' value='Save'/></td></tr>";
    var elem=document.getElementById("3");
    elem.parentNode.removeChild(elem);
}
function addskill()
{
	document.getElementById("Skills").innerHTML+="<tr><td><textarea name='skill1' rows='2' cols='25' required/></textarea></td><td><textarea name='prac2' rows='2' cols='20' required></textarea></td><td><textarea name='desc6' rows='4' cols='40' required></textarea></td><td><input type='submit' name='Skills' value='Save'/></td></tr>";
    var elem=document.getElementById("4");
    elem.parentNode.removeChild(elem);
}
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
<h1  style="position:relative; top:10px; text-shadow: 5px 5px 5px #888888; left:170px; font-size:40px; font-family:Georgia; color:black">Non-Technical Details</h1>
<div class="two" style="position:relative; top:20px; left:150px;">


<form name="Club" action="clubs.php" method="POST">
<span id="three">1. Clubs:</span>
<table id="club">
<tr>
<th>Club name</th>
<th>Description</th>
<th>Brag about it!</th>
</tr>
</table>
<br/><br/>

<input type="button" id="1" name="AddClub" value="Add Club" onclick="addclub();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>

<form name="Sports" action="sports.php" method="POST">
<span id="three">2. Sports:</span>
<table id="Sports">
<tr>
<th>Sport</th>
<th>Excellence Level</th>
<th>Practising since?</th>
<th>Achievements</th>
</tr>
</table>
<br/><br/>

<input type="button" id="2" name="AddSport" value="Add a sport" onclick="addsport();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>

<form name="Workshop" action="ntworkshops.php" method="POST">
<span id="three">3. Workshops:</span>
<table id="Workshop">
<tr>
<th>Workshop Title</th>
<th>Duration</th>
<th>Experience</th>
<th>Add Certificate</th>
</tr>
</table>
<br/><br/>

<input type="button" id="3" name="Addws" value="Add Workshop" onclick="addworkshop();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>


<form name="NTSkills" action="ntskills.php" method="POST">
<span id="three">4. Non-Technical Skills:</span>
<table id="Skills">
<tr>
<th>Skill</th>
<th>Practising Since?</th>
<th>Description</th>
</tr>
</table>
<br/><br/>

<input type="button" id="4" name="AddSkill" value="Add a skill" onclick="addskill();">
</form>
<br/>
<br/>
<br/>
<hr/><br/>

</div>
</body>
</html>
