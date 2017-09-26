<?php
error_reporting(0);
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
$id=$_REQUEST['id'];

?>
<html>
<head>
</head>
<body style="background:-webkit-linear-gradient(lightblue 33%,lightblue 67%);">
<form action="newscode.php? id=<?php echo $id; ?> " method="POST">
<p style="color:blue; font-size:27px;">News And Events</p>
<textarea rows="10" cols="60" maxlength="200" name="news"></textarea></br>
<input type="submit" value="Add" style="background-color:blue; font-size:25; height:40px; width:200px; border-radius:5px;"/>
</form>
</body>
</html>