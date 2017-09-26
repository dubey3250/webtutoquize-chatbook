<?php
session_start();
error_reporting(0);
$m=$_REQUEST['m'];
$t=$_REQUEST['t'];
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
}
//for c++
if($_SESSION['cc']=="")
{
	$_SESSION['cc']=5;
}
mysql_connect('localhost','root','');

mysql_select_db("project2");

if($_SESSION['cc']==1)
{
	$query="select * from quizu1";
	$res=mysql_query($query);
}
else if($_SESSION['cc']==2)
{
	$query="select * from quizu2";
	$res=mysql_query($query);
}
else if($_SESSION['cc']==3)
{
	$query="select * from quizu3";
	$res=mysql_query($query);
}
else if($_SESSION['cc']==4)
{
	$query="select * from quizu4";
	$res=mysql_query($query);
}
else
{
	$query="select * from quizu";
	$res=mysql_query($query);
}


?>
<html>
<head>
<style>
span
{
	font-size:20px;
	color:blue;
	margin-left:3px;
}
#n
{
	height:150px;
	width:600px;
	border:1px solid;
	float:left;
}
p
{
	font-size:25px;
}
</style>
</head>

<body bgcolor="lightblue">
	<h1>Click here to <a href="index.php">Go Back To Home</a></h1>
	<h1>Click here to <a href="logout.php">Secure Logout</a></h1>
	<h1>Click here to <a href="quiz.php? cc=<?php echo $_SESSION['cc']; ?>">play quiz.</a></h1>
		<?php
				if($m==1)
				{
					if($_SESSION['count']>=6)
					{
			?>
					<p style="color:blue; font-size:25px;">Thankyou for playing..</p>
					<p style="color:blue; font-size:25px;">Congrates! Well played..</p>
					<p style="color:blue; font-size:25px;">Your score is.<?php echo $_SESSION['count']; ?></p>
			<?php	
					}
					if($_SESSION['count']<6)
					{
			?>
					<p style="color:blue; font-size:25px;">Thankyou for playing..</p>
					<p style="color:blue; font-size:25px;">You have played very poor..</p>
					<p style="color:blue; font-size:25px;">Your score is.<?php echo $_SESSION['count']; ?></p>
			<?php	
					}
			//	session_destroy();
			
				}
				
			?>
<?php			
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$id=$row['id'];
	//echo $id;
}
if($id==10 && $_SESSION['cc']==5)
	{
			
			$query="select *from quizu";
			$res=mysql_query($query);
			
?>
<span style="color:blue; font-size:25px;">Your answers..</span><span style="color:blue; font-size:25px; margin-left:470px;">Your Correct answers..</span>
<?php			
			$i=1;
			while($row=mysql_fetch_array($res,MYSQL_BOTH))
			{
				$uid=$row['uid'];
?>	
<div id="n">		
		<span><?php echo $i; ?></span><span><?php echo $row['question']; ?></span></br>
		<span>1.<?php echo $row['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row['option2']; ?></span></br>
		<span>3.<?php echo $row['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row['status']; ?></span></br></br>		
</div>		
<?php
				$query2="select *from quiz where id='$uid'";
			    $res2=mysql_query($query2);
				$row2=mysql_fetch_array($res2,MYSQL_BOTH);
?>
<div id="n">				
		<span><?php echo $i; ?></span><span><?php echo $row2['question']; ?></span></br>
		<span>1.<?php echo $row2['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row2['option2']; ?></span></br>
		<span>3.<?php echo $row2['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row2['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row2['status']; ?></span></br></br>	
</div>			
<?php		
$i++;
			}
?>

<?php
			
 session_destroy();			
	}
	
	else
	{
		$query2="truncate table quizu";
		mysql_query($query2);
	}
	
	if($id==10 && $_SESSION['cc']==1)
	{
			
			$query="select *from quizu1";
			$res=mysql_query($query);
			
?>
<span style="color:blue; font-size:25px;">Your answers..</span><span style="color:blue; font-size:25px; margin-left:470px;">Your Correct answers..</span>
<?php		
		$i=1;
			while($row=mysql_fetch_array($res,MYSQL_BOTH))
			{
				$uid=$row['uid'];
?>	
<div id="n">		
		<span><?php echo $i; ?></span><span><?php echo $row['question']; ?></span></br>
		<span>1.<?php echo $row['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row['option2']; ?></span></br>
		<span>3.<?php echo $row['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row['status']; ?></span></br></br>		
</div>		
<?php
				$query2="select *from quiz1 where id='$uid'";
			    $res2=mysql_query($query2);
				$row2=mysql_fetch_array($res2,MYSQL_BOTH);
?>
<div id="n">				
		<span><?php echo $i; ?></span><span><?php echo $row2['question']; ?></span></br>
		<span>1.<?php echo $row2['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row2['option2']; ?></span></br>
		<span>3.<?php echo $row2['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row2['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row2['status']; ?></span></br></br>	
</div>			
<?php		
$i++;		
			}
?>

<?php
			
 session_destroy();			
	}

	else
	{
		$query2="truncate table quizu1";
		mysql_query($query2);
	}
	
 if($id==10 && $_SESSION['cc']==2)
	{
			
			$query="select *from quizu2";
			$res=mysql_query($query);
			
?>
<span style="color:blue; font-size:25px;">Your answers..</span><span style="color:blue; font-size:25px; margin-left:470px;">Your Correct answers..</span>
<?php		
$i=1;	
			while($row=mysql_fetch_array($res,MYSQL_BOTH))
			{
				$uid=$row['uid'];
?>	
<div id="n">		
		<span><?php echo $i; ?></span><span><?php echo $row['question']; ?></span></br>
		<span>1.<?php echo $row['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row['option2']; ?></span></br>
		<span>3.<?php echo $row['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row['status']; ?></span></br></br>		
</div>		
<?php
				$query2="select *from quiz2 where id='$uid'";
			    $res2=mysql_query($query2);
				$row2=mysql_fetch_array($res2,MYSQL_BOTH);
?>
<div id="n">				
		<span><?php echo $i; ?></span><span><?php echo $row2['question']; ?></span></br>
		<span>1.<?php echo $row2['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row2['option2']; ?></span></br>
		<span>3.<?php echo $row2['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row2['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row2['status']; ?></span></br></br>	
</div>			
<?php				
$i++;
			}
?>

<?php
			
 session_destroy();			
	}	
	else
	{
		$query2="truncate table quizu2";
		mysql_query($query2);
	}
	
 if($id==10 && $_SESSION['cc']==3)
	{
			
			$query="select *from quizu3";
			$res=mysql_query($query);
			
?>
<span style="color:blue; font-size:25px;">Your answers..</span><span style="color:blue; font-size:25px; margin-left:470px;">Your Correct answers..</span>
<?php			
$i=1;
			while($row=mysql_fetch_array($res,MYSQL_BOTH))
			{
				$uid=$row['uid'];
?>	
<div id="n">		
		<span><?php echo $i; ?></span><span><?php echo $row['question']; ?></span></br>
		<span>1.<?php echo $row['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row['option2']; ?></span></br>
		<span>3.<?php echo $row['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row['status']; ?></span></br></br>		
</div>		
<?php
				$query2="select *from quiz3 where id='$uid'";
			    $res2=mysql_query($query2);
				$row2=mysql_fetch_array($res2,MYSQL_BOTH);
?>
<div id="n">				
		<span><?php echo $i; ?></span><span><?php echo $row2['question']; ?></span></br>
		<span>1.<?php echo $row2['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row2['option2']; ?></span></br>
		<span>3.<?php echo $row2['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row2['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row2['status']; ?></span></br></br>	
</div>			
<?php				
$i++;
			}
?>

<?php
			
 session_destroy();			
	}
	
	else
	{
		$query2="truncate table quizu3";
		mysql_query($query2);
	}
	
	if($id==10 && $_SESSION['cc']==4)
	{
			
			$query="select *from quizu4";
			$res=mysql_query($query);
			
?>
<span style="color:blue; font-size:25px;">Your answers..</span><span style="color:blue; font-size:25px; margin-left:470px;">Your Correct answers..</span>
<?php			
$i=1;
			while($row=mysql_fetch_array($res,MYSQL_BOTH))
			{
				$uid=$row['uid'];
?>	
<div id="n">		
		<span><?php echo $i; ?></span><span><?php echo $row['question']; ?></span></br>
		<span>1.<?php echo $row['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row['option2']; ?></span></br>
		<span>3.<?php echo $row['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row['status']; ?></span></br></br>		
</div>		
<?php
				$query2="select *from quiz4 where id='$uid'";
			    $res2=mysql_query($query2);
				$row2=mysql_fetch_array($res2,MYSQL_BOTH);
?>
<div id="n">				
		<span><?php echo $i; ?></span><span><?php echo $row2['question']; ?></span></br>
		<span>1.<?php echo $row2['option1']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>2.<?php echo $row2['option2']; ?></span></br>
		<span>3.<?php echo $row2['option3']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span>4.<?php echo $row2['option4']; ?></span></br>
		<span style="color:red;"><?php echo $row2['status']; ?></span></br></br>	
</div>			
<?php				
$i++;
			}
?>

<?php
			
 session_destroy();			
	}		
	else
	{
		$query2="truncate table quizu4";
		mysql_query($query2);
	}
?>	
</body>
</html>