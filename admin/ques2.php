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
<style>
tr td
{
	height:40px;
	width:150px;
	font-size:30px;
	color:indigo;
}
tr td input
{
	height:40px;
	width:500px;
}
table
{
	margin-top:75px;
}

</style>
</head>

<body bgcolor="lightblue">
	<table border="0" align="center">
	<form action="quescode2.php" method="post">
		<tr>
			<td>Question</td><td><textarea rows="4" cols="60" required name="ques" style="resize:none;"></textarea></td>
		</tr>	
		<tr>
			<td>Option1</td><td><input type="text" required name="op1"></td>
		</tr>	
		<tr>
			<td>Option2</td><td><input type="text" required name="op2"></td>
		</tr>
		<tr>
			<td>Option3</td><td><input type="text" required name="op3"></td>
		</tr>
		<tr>
			<td>Option4</td><td><input type="text" required name="op4"></td>
		</tr>
		<tr>
			<td>Status</td><td><input type="text" required name="status"></td>
		</tr>
		<tr>
			<td ><a href="profile2.php"><input type="button" value="Back" style="width:150px;" ></a></td><td><input type="submit"/></td>
		</tr>
		
		</form>
	</table>	
</body>
</html>