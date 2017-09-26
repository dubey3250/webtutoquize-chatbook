<?php
error_reporting(0);
session_start();
if($_SESSION['cc']=="")
{
	$_SESSION['cc']=$_REQUEST['cc'];
}
$option=$_POST['option'];
$id=$_POST['id'];
//echo $id;
$user1=$_SESSION['user'];
mysql_connect('localhost','root','');
mysql_select_db("project2");
if($_SESSION['cc']==1)
{
	$query="select * from quiz1 where id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$question=$row['question'];
$option1=$row['option1'];
$option2=$row['option2'];
$option3=$row['option3'];
$option4=$row['option4'];
$date=$row['date'];
$status=$row['status'];
if($status==$option)
{
	$_SESSION['count']=$_SESSION['count']+1;
}
	$query2="insert into quizu1 (uid,user,question,option1,option2,option3,option4,date,status) values('$id','$user1','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
	
	$query3="select *from quizu1";
	$res3=mysql_query($query3);
	while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
	{
		if($row3['id']>10)
		{
			$query4="truncate table quizu1";
			mysql_query($query4);
		$query2="insert into quizu1 (uid,question,option1,option2,option3,option4,date,status) values('$id','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
		}
	}
	
	if($_SESSION['ques']!="")
	{
		$_SESSION['ques']=$_SESSION['ques']-1;
	}
	else
	{
		header("location:quiz.php? m=1");
	}

	
}
else if($_SESSION['cc']==2)
{
	
	$query="select * from quiz2 where id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$question=$row['question'];
$option1=$row['option1'];
$option2=$row['option2'];
$option3=$row['option3'];
$option4=$row['option4'];
$date=$row['date'];
$status=$row['status'];
if($status==$option)
{
	$_SESSION['count']=$_SESSION['count']+1;
}
	$query2="insert into quizu2 (uid,question,option1,option2,option3,option4,date,status) values('$id','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
	
	$query3="select *from quizu2";
	$res3=mysql_query($query3);
	while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
	{
		if($row3['id']>10)
		{
			$query4="truncate table quizu2";
			mysql_query($query4);
		$query2="insert into quizu2 (uid,question,option1,option2,option3,option4,date,status) values('$id','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
		}
	}
	
	if($_SESSION['ques']!="")
	{
		$_SESSION['ques']=$_SESSION['ques']-1;
	}
	else
	{
		header("location:quiz.php? m=2");
	}
	
}
else if($_SESSION['cc']==3)
{
	
	$query="select * from quiz3 where id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$question=$row['question'];
$option1=$row['option1'];
$option2=$row['option2'];
$option3=$row['option3'];
$option4=$row['option4'];
$date=$row['date'];
$status=$row['status'];
if($status==$option)
{
	$_SESSION['count']=$_SESSION['count']+1;
}
	$query2="insert into quizu3 (uid,question,option1,option2,option3,option4,date,status) values('$id','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
	
	$query3="select *from quizu3";
	$res3=mysql_query($query3);
	while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
	{
		if($row3['id']>10)
		{
			$query4="truncate table quizu3";
			mysql_query($query4);
		$query2="insert into quizu3 (uid,question,option1,option2,option3,option4,date,status) values('$id','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
		}
	}
	
	if($_SESSION['ques']!="")
	{
		$_SESSION['ques']=$_SESSION['ques']-1;
	}
	else
	{
		header("location:quiz.php? m=3");
	}
	
	
}
else if($_SESSION['cc']==4)
{
	
	$query="select * from quiz4 where id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$question=$row['question'];
$option1=$row['option1'];
$option2=$row['option2'];
$option3=$row['option3'];
$option4=$row['option4'];
$date=$row['date'];
$status=$row['status'];
if($status==$option)
{
	$_SESSION['count']=$_SESSION['count']+1;
}
	$query2="insert into quizu4 (uid,question,option1,option2,option3,option4,date,status) values('$id','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
	
	$query3="select *from quizu4";
	$res3=mysql_query($query3);
	while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
	{
		if($row3['id']>10)
		{
			$query4="truncate table quizu4";
			mysql_query($query4);
		$query2="insert into quizu4 (uid,question,option1,option2,option3,option4,date,status) values('$id','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
		}
	}
	
	if($_SESSION['ques']!="")
	{
		$_SESSION['ques']=$_SESSION['ques']-1;
	}
	else
	{
		header("location:quiz.php? m=4");
	}
	
}
else if($_SESSION['cc']==5)
{
$query="select * from quiz where id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$question=$row['question'];
$option1=$row['option1'];
$option2=$row['option2'];
$option3=$row['option3'];
$option4=$row['option4'];
$date=$row['date'];
$status=$row['status'];
if($status==$option)
{
	$_SESSION['count']=$_SESSION['count']+1;
}
	$query2="insert into quizu (uid,question,option1,option2,option3,option4,date,status) values('$id','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
	
	$query3="select *from quizu";
	$res3=mysql_query($query3);
	while($row3=mysql_fetch_array($res3,MYSQL_BOTH))
	{
		if($row3['id']>10)
		{
			$query4="truncate table quizu";
			mysql_query($query4);
		$query2="insert into quizu (uid,question,option1,option2,option3,option4,date,status) values('$id','$question','$option1','$option2','$option3','$option4',curdate(),'$option')";
	mysql_query($query2);
		}
	}
	
	if($_SESSION['ques']!="")
	{
		$_SESSION['ques']=$_SESSION['ques']-1;
	}
	else
	{
		header("location:quiz.php? m=5");
	}
}	

	header("location:quiz.php");
?>