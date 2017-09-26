<?php
session_start();
include("database.php");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select *from signup where username='$username' and password='$password'";
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$_SESSION['user']=$username;
		$_SESSION['pass']=$password;
		sleep(3);	
		header("location:c.php?pr=succssessfully");
	}
	else
	{
		header("location:index.php?m=wrong_password");
	}

?>