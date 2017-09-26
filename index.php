<?php
session_start();
error_reporting(0);
$t=$_REQUEST['t'];
if($t==1 or $t=="")
{
	session_destroy();
}
 
 
?>

<!DOCTYPE html>
<html>
<head>
<style>
#main
{
height:400px;
width:900px;
border:1px solid  #70E8DC;
margin:0px auto;
background-color:#4db8ff;
float:left;
border-radius:0px 0px 0px 100px;
}
#sub
{
height:400px;
width:600px;
border:1px solid #4db8ff;
margin-top:70px;
margin-left:100px;
background-color:#4db8ff;
border-radius:40px 40px 0px 0px;
box-shadow:20px 20px 25px #008ae6;
}
#head
{
height:150px;
width:1350px;
border:1px solid #70E8DC;
margin:0px auto;
background-image:url('attach/maxresdefault.jpg');
background-repeat:no-repeat;
background-size:cover;
text-align:center;
border-radius:40px 40px 0px 0px;
}
input
{
height:40px;
width:250px;
border-radius:10px 10px 10px 10px;
//background-color:yellow;
}
tr th
{
font-size:30px;
color:#e6e600;
}
body
{
background-image:url('attach/Internet-of-Things-security-questions.jpg'); 
}
p
{
color:#e6e600;
font-size:50px;
}
#mm
{
height:500px;
width:1300px;
margin:0px auto;
}
#right
{
height:500px;
width:395px;
border:1px solid #70E8DC;
float:right;
background-color:#1a8cff;
box-shadow:15px 15px 15px #008ae6;
}
#form2 input
{
height:40px;
width:220px;
border-radius:10px 10px 10px 10px;
outline:none;
}
sup
{
	color:red;
}
span
{
	color:red;
	font-size:20px;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/webcam.js"></script>
	<script>
	f=0;
		$(function(){
			//give the php file path
			webcam.set_api_url( 'saveimage.php' );
			webcam.set_swf_url( 'scripts/webcam.swf' );//flash file (SWF) file path
			webcam.set_quality( 100 ); // Image quality (1 - 100)
			webcam.set_shutter_sound( true ); // play shutter click sound
			var camera = $('#camera');
			var c=camera.html(webcam.get_html(395, 500)); //generate and put the flash embed code on page
			$('#capture_btn').click(function(){
				//take snap
				webcam.snap();
				//webcam.reset();
				f=1;
				setTimeout("validate()",2000);
			});
			
		});
	function validate()
	{
		if(f==1 && validation()==true)
		{
			alert("Thankyou !");	
			return true;
		}
		else
		{
			alert("First you allow the camera to your picture for later authentication. then logIn!");
			return false;
		}	
	}
	function validation()
	{
		//var reg=/^[0-9a-zA-Z]$/;
		if(document.val.username.value=="" || document.val.password.value=="")
		{
			alert("Please Enter the correct username and password!");
			return false;
		}
		else
		{
			return true;
		}
		
	}
	function cusername(uname)
	{
		var letters = /^[A-Za-z]+$/; 
		if(uname.value.match(letters) && (uname.value.length<30 && uname.value.length>=5))  
		{  
			document.getElementById("username").innerHTML="ok!"  
		}  
		else  
		{  
			document.getElementById("username").innerHTML="please fill up with alphabetic letters characters must be greater than 5 and less than 30!"  
			uname.focus();
		} 
	}
	function cpassword(upass)
	{
		var letters = /^[0-9A-Za-z]+$/; 
		if(upass.value.match(letters) && (upass.value.length<=16 && upass.value.length>=5))  
		{  
			document.getElementById("password").innerHTML="ok!"  
		}  
		else  
		{  
			document.getElementById("password").innerHTML="please fill up with alphabetic letters characters must be greater than 5 and less than 17!"  
			upass.focus();
		} 
	}
	</script>
</head>
<body>
<div id="head">
<p>Novel Continuous Authentication Using Biometric</p>
</div>
<div id="mm">
<div id="main">
<marquee style="color:red;font-size:25px;" direction="left" BEHAVIOR="ALTERNATE" SCROLLDELAY="250">Please Enter your authorised details which 
will be used for later user authentication.
</marquee>
<marquee style="color:red;font-size:25px;" direction="left" SCROLLDELAY="200">Please Enter your authorised details which 
will be used for later user authentication.
</marquee>
	<div id="sub">
		<form name="val" action="code.php" method="post" onsubmit="return validation();" >
		<table cellspacing="10px" cellpadding="10px">
		<tr><th>User ID:</th><td><input type="text" name="username" onblur="cusername(document.val.username);" placeholder="Enter the username or id"/><span id="username"></span></td></tr>
		<tr><th>Password:</th><td><input type="password" placeholder="Enter the password" onblur="cpassword(document.val.password);" name="password"/><span id="password"></span></td></tr>
		<tr><td></td><td><input type="submit" id="capture_btn" style="background-color:blue;font-size:20px;" value="Login"/></td></tr>
		<tr>
		<td></td><td><a href="signup.php" style="font-size:25px;">Sign up</a>&nbsp;&nbsp;&nbsp;
		<a href="signup.php" style="font-size:25px;">Forgot password?</a></td>
		</tr>
		</table>
		</form>
	</div>	
</div>
<div id="right">
	<div id="camera"></div>
	</div>
</div>
</body>
</html>