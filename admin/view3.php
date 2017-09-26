<?php

session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
mysql_connect('localhost','root','');
mysql_select_db("project2");
$query="select * from quiz3";
$res=mysql_query($query);
?>
<html>
<head>
<style>
tr td
{
	height:50px;
	width:200px;
	font-size:25px;
	color:indigo;
}
tr th
{
	font-size:25px;
}
</style>
</head>

<body bgcolor="lightblue">
	<table border="1">
		<tr>
		<th>Sr.no</th>
		<th>Question</th>
		<th>Option1</th>
		<th>Option2</th>
		<th>Option3</th>
		<th>Option4</th>
		<th>Date</th>
		<th>Status</th>
		<th>Delete</th>
		</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>			
		<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $row['question'];?></td>
		<td><?php echo $row['option1'];?></td>
		<td><?php echo $row['option2'];?></td>
		<td><?php echo $row['option3'];?></td>
		<td><?php echo $row['option4'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['status'];?></td>
		<td><a href="delete.php? id=<?php echo $row['id']; ?>">Delete</a></td>
		</tr>			
			
			
<?php
$i++;			
}		
?>		
		
	</table>
</body>
</html>