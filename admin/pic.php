<html>
<head>
<style>
body
{
	background-color:lightblue;
}
#p
{
	height:250px;
	width:300px;
	float:left;
	margin-left:10px;
	border:1px solid white;
}
</style>
</head>

<body>
	<form action="picc.php" method="post" enctype="multipart/form-data">
add pics<input type="file" required name="file"/>
<input type="submit" value="add"/>
	</form>
	
	<?php
	include("database.php");
$query="select *from glry";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<div id="p">
<a href="http://localhost:70/website2/admin/file/<?php echo $row['file'];?>"><img src="file/<?php echo $row['file']; ?>" height="250" width="300"/></a><br/>
<span style="color:red; font-size:25px;  word-spacing:3px;"><a href="delimg.php? id=<?php echo $row['id']; ?>">delete.</a></span>
</div>
<?php
}
?>
</body>
</html>
