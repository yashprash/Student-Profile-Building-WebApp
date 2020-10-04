<html>
<head><title>Basic Details</title>
<style>
.one
{
  background: #505160;
  height:120px;
  border: 0px;
  font-family: impact;
  margin:0px;
}
.two
{
	font-family:'Trebuchet MS';
	font-size:20px;
	color:black;
	background:rgba(172,208,192,0.7);
	border-style:none;
	border-collapse:collapse;
	border-size:10pt;
	border-color:'dark-green';
	padding:10px;
	width:400px;
	margin:0px;
}
body
{
background: url("BImage2.jpg");
background-repeat:no-repeat;
margin: auto;
background-size: 100% 120%;
}

.topnav {
    background-color: #68829E;
    overflow: hidden;
box-shadow: 5px 5px 5px #888888;

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

</style>
<script type="text/javascript">
function checkSem()
{
var s = document.getElementById("sem").value.search(/[1-8]/);
if(s == -1)
{
	alert("Invalid Sem");
  return false;
}
else {
  return true;
}
}
</script>
</head>
<body>
<?php
session_start();
$usn=$_SESSION['usn'];
?>
<div class="one">
<p style="position:relative; top:5px; left:350px;">
<img src="Logoo.png" alt="Logo" width="100px" height="100px">
</p>
<p style="position: absolute; left:500px; top:0px; color:yellow; font-size:40px;">
OnCom<sup style="font-size:20px;">&copy</sup>
</p>
<p style="position:absolute; left:600px; top:80px; color:white;">The BMSCE Online Community</p>
</div>
<div class="topnav">
	<a href="home_page.php"> Home </a>
 </div>
 <form name="BasicDetails" action="basicdetails.php" method="POST" enctype="multipart/form-data">
  <pre>
 <div class = "two" style="position:relative;top:50px;left:400px;"><h1 style = "font-family:Trebuchet MS; font-size:40px; position:relative; top:0px; left:30px;" > Add Basic Details</h1>
 Branch   :<select name="branch">
   <option value="CSE">CSE</option>
  <option value="ISE">ISE</option>
  <option value="ECE">ECE</option>
  <option value="TCE">TCE</option>
  <option value="MECH">MECH</option>
  <option value="MedEle">MedEle</option>
  <option value="BT">BioTech</option>
  <option value="IT">IT</option>
  <option value="EEE">EEE</option>
  <option value="CHEM">Chem</option>
  <option value="CIVIL">Civil</option>
</select><br />
 Section  :<input type = "text" id = "section" name="section" required /><br />
 Sem       :<input type = "text" id = "sem" name="sem" onchange = "checkSem();" required /><br />
 Bio        :<textarea rows = "3" cols = "22" name="bio" id="bio" required>
</textarea><br />
 Upload Profile Picture
<input type="file" required name="pic" id="pic" accept="image/*"><br />
                             <input type="submit" name="submit" value="Submit" onclick="return checkSem();"/>
 </div>
 </form>
 </pre>

</body>
</html>
