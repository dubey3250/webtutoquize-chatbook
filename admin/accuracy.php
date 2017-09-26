<?php
session_start();
error_reporting(0);
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
<td style="height:50px; width:225px;">Accuracy</td>
</tr>

<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>	
 <tr>
		<td style="height:50px; width:225px;"><?php echo $i;?></td>
		<td style="height:50px; width:225px;"><a href="user.php?userid=<?php echo $row['userid']; ?>"><?php echo $row['userid'];?></a></td>
		
		
<?php
$i++;
?>
<td>
<?php
$query2="select userid from biometrix group by userid";
$res2=mysql_query($query2);
$x=0;
while($row1=mysql_fetch_array($res2,MYSQL_BOTH))
{
	$s=$row1['userid'];
	$q="select *from biometrix where userid='$s'";
	$r=mysql_query($q);
	while($rows=mysql_fetch_array($r,MYSQL_BOTH))
	{
		$select=$rows['image'];
		$location="../saved_images/";
		include("acc.php");
		$expected=100;
		if($md5image1=="")
		{
			$md5image1 = md5(file_get_contents($location.$select));
		}
			$md5image2=md5(file_get_contents($location.$select));
		if ($md5image1==$md5image2) 
		{
			$x++;
		}
		
	}
	//echo $x;
}
$accuracy=((($x)/11)*$expected*$r)-1;
	echo $accuracy;
}	  
?>
</td>
</tr>
</table>
</body>
</html>

