<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>

<?php
mysql_connect('localhost','root','');
mysql_select_db("project2");

$query="select userid from biometrix group by userid";

$res=mysql_query($query);
?>

<html>
<head>
</head>
<body bgcolor="lightblue">
<table border="2px" bgcolor="lightgreen">
<tr>
<td style="height:50px; width:225px;">S.no</td>
<td style="height:50px; width:225px;">URENANME OR ID</td>
</tr>

<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>	
 <tr>
		<td style="height:50px; width:225px;"><?php echo $i;?></td>
		<td style="height:50px; width:225px;"><a href="user.php?userid=<?php echo $row['userid']; ?>"><?php echo $row['userid'];?></a></td>
		
		
  </tr>
<?php
$i++;
}
?>
</body>
</html>