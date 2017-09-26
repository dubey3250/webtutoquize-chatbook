<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
//echo "<br/>";
}
?>

<html>
<head>
<link href="style6.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="#00b3b3">
<a href="logout.php"><p style="font-size:20px; color:blue;">LogOut.</p></a>
<span style="font-size:60px; font-family:Script MT Bold;"><?php echo $_SESSION['admin'];?></span><br/><br/>
<!--<span style="font-size:30px; font-family:Script MT Bold;">to see all the registration data</span>
<a href="show.php"><span style="font-size:35px; font-family:Script MT Bold;">Click here.</span></a>-->

<center><br/><br/>
			<!--<div id="menu2">
			      	<ul>
					
					
					<li><span style="font-size:20px;">Students</span></li>
					<li><span style="font-size:20px;">Response Mgmt</span></li>
					<li><span style="font-size:20px;">Settings</span></li>
				
				</ul>
			</div>-->
			
				<div id="menu">
			      	<ul>
					
					
					<li><a href="accuracy.php"><span style="font-size:20px; color:blue;">User Accuracy</span></a></li>
					<li><a href="authorized.php"><span style="font-size:20px; color:blue;">Authorized user</span></a></li>
					<li><a href="view.php"><span style="font-size:20px; color:blue;">View Questions C</span></a></li>
				
				</ul>
			   </div>
			   <div id="menu">
			      	<ul>
					
					
					<li><a href="show2.php"><span style="font-size:20px; color:blue;">Users</span></a></li>
				
				</ul>
			   </div>
			<?php
				error_reporting(0);
				$m=$_REQUEST['m'];
				if($m==1)
				{
			?>
			<p style="align:center;color:red;font-size:25px;">Your Table is Successfully Truncated.</p>
			<?php	
				}
			
			?>
			
						
		</center>

</body>
</html>
