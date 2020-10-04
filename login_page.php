<?xml version="1.0" encoding="UTF_8"?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 strict EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Login</title>
<style>
.one
{
  background: #505160;
  height:120px;
  width:auto;
  font-family: impact;
  margin:auto;
}
.two
{
	font-family:'Trebuchet MS';
	font-size:20px;
	color:black;
	background-color:#AEBD38;
	border-style:none;
	border-collapse:collapse;
	border-size:10pt;
background:rgba(172,208,192,0.7);
	padding:10px;
	width:400px;
	margin:0px;
}
body
{
background: url("BImage2.jpg");
background-repeat:no-repeat;
background-size: 100% 160%;
margin: auto;
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

<form name="signup"  action="login.php" method="POST">

<div class="two" style="position:relative; top:60px; left:400px;">
  <h1  style="position:relative; top:-10px; left:130px; font-size:40px; font-family:Georgia; color:black">Login</h1>
  <pre>
USN     :<input type="text" name="usn" id="usn" size="20"/><br/><br/>
Password:<input type="password" name="p1" id="p1" size="20"/><br/><br/>
               <input type="submit" name="submit" value="Login"/>

 </pre>
</form>
</div>
</body>
</html>
