<!DOCTYPE html>
<html>
<head>
	<title>Verification system</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/webcam.js"></script>
	<script>
	setTimeout("red()",5000);
	function red()
	{
		$(function(){
			//give the php file path
			webcam.set_api_url( 'saveimage.php' );
			webcam.set_swf_url( 'scripts/webcam.swf' );//flash file (SWF) file path
			webcam.set_quality( 100 ); // Image quality (1 - 100)
			webcam.set_shutter_sound( true ); // play shutter click sound
			//enable_flash: false
			var camera = $('#camera');
			camera.html(webcam.get_html(300, 460)); //generate and put the flash embed code on page
			$( document ).ready(function(){
				webcam.snap();
				
				//webcam.reset();
			});
			
			
		});
	}	
	</script>
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
height:460px;
width:300px;
border:1px solid #70E8DC;
float:right;
background-color:#1a8cff;
box-shadow:15px 15px 15px #008ae6;
}
	</style>
</head>
<body>
<div id="mm">
<div id="main">
</div>
<div id="right">
	<div id="camera"></div>
	<br />
</div>	
</div>	
</body>
</html>
