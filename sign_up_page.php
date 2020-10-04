<html>
<head><title>Signup</title>
<style>
.one
{
  background: #505160;
  height:120px;
  width:auto;
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
	padding:5px;
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
function validate()
{
	var flag=1;
	var ValidateUSN1,ValidateUSN2;
	var usnvalue=signup.usn.value;
	ValidateUSN1=signup.usn.value.search(/1BM1[1-7](CS|IS|EE|EC|TC|ML|CH|BT|CV|ME|EI|IT|AT)[0-9]{3}/g);
	ValidateUSN2=signup.usn.value.search(/1BM1[1-7](MBA|MCA)[0-9]{2}/g);
	if(ValidateUSN1==-1 && ValidateUSN2==-1)
	{
	alert("Invalid USN");
	flag=0;
	}
	var name,valName;
name=signup.name.value;
valName=name.search(/[^A-Za-z\s]/);
if(valName!=-1 || name=="")
{
	alert("Please enter a valid name");
	flag=0;
}

	var valEmail=signup.email.value.search(/(@bmsce.ac.in)/g);
if(valEmail==-1)
{
	alert("Invalid email: Please enter your BMSCE email");
	flag=0;
}

var v1,v2,v3,v4;
v1=String(document.getElementById("p1").value);
if(v1.length<8)
{
	alert("Password should contain atleast 8 characters!");
	flag=0;
}
v2=v1.search(/[A-Z]/);
v3=v1.search(/[a-z]/);
v4=v1.search(/[0-9]/);
if(v2==-1 || v3==-1 || v4==-1)
{
	alert("Password should contain atleast one uppercase letter, one lowercase letter and digit!")
	flag=0;
}
var a=document.getElementById("p1").value;
var b=document.getElementById("p2").value;
if(a!=b)
{
	alert("Please type the same password");
	flag=0;
}

	if(flag==1)
		return true;
	else
		return false;
}
</script>
</head>
<body>
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
  <a href="about_page.php">About Developers</a>
    <a href="login_page.php">Login</a>
    <a href="sign_up_page.php">Signup</a>
	<a href="home_page.php">Home</a>
 </div>

<form name="signup" action="signup.php" method="POST">
 <pre>
<div class="two" style="position:relative; top:60px; left:400px;"><h1  style="position:relative; top:0px; left:120px; font-size:40px; font-family:Georgia; color:black">Signup</h1>
 Full Name             :<input type="text" name="name" id="name" size="20" /><br/>
 USN                      :<input type="text" name="usn" id="usn" size="10"  /><br/>
 Email                    :<input type="email" name="email" id="email" size="20" /><br/>
 Create a password:<input type="password" name="p1" id="p1" size="20" /><br/>
 Re-enter password:<input type="password" name="p2" id="p2" size="20" /><br/>
			<input type="submit" name="submit" value="Submit" onclick="return validate();"/>
</form>
</pre>
</div>
</body>
</html>
