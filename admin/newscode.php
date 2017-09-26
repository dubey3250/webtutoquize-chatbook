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

<?php
$news=$_POST['news'];
//echo $news;
mysql_connect('localhost','root','');
mysql_select_db("project2");
if($id==1)
{
	$query="insert into news2(news,date) values('$news',curdate())";
mysql_query($query);
header("location:profile2.php");
}
else
{
$query="insert into news(news,date) values('$news',curdate())";
mysql_query($query);
header("location:profile2.php");
}
?>
