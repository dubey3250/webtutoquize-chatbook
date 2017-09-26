<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:login.php");
echo "<br/>";
} 
?>

<?php

//$serch=$_POST['serch'];
//echo $serch;
//echo "</br>";
$userid=$_REQUEST['userid'];
include("database.php");
$query="select *from biometrix where userid='$userid'";
$res=mysql_query($query);
/*if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	echo "<b style='color:blue;font-size:30px;'>Results...</b>";
}
else
{
	echo "<b style='color:blue;font-size:30px;'>Not found....</b>";
}
*/
?>

<html>
<head>
<style>
td
{
	font-size:30px;
}

body
{
	background:-webkit-linear-gradient(lightblue,lightblue);
}
</style>
</head>
<body>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<table border="0" cellpadding="0" cellspacing="0" style="float:left;margin:10px">
	<tr>
	<td ><img src="../saved_images/<?php echo $row['image']; ?>" height="220" width="200"/></td>
	</tr>
	<tr>
	<td><?php echo $row['userid']; ?></td>
	</tr>
</table></td>
<?php
}
?>		
</body>
</html>