<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>

<html>
<head>
<title>page</title>
</head>
<body bgcolor="lightblue">
<form action="password.php" method="POST">

<span style="font-size:40px; font-family:Old English Text MT;">Admin pannel change password</span><br/><br/>
		<span style="font-size:40px;">new username</span> <input type="text" name="username" required="required" style="height:40px; width:200px;"/><br/><br/>
		<span style="font-size:40px;">new password</span>  <input type="password" name="password" required="required" style="height:40px; width:200px;"/><br/><br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="change" style="height:40px; border-radius:10px; width:150px; background-color:blue;" />

</form>

</body>
</html>
