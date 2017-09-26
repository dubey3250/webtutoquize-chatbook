<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
//echo "<br/>";
}
?>
<?php
mysql_connect('localhost','root','');
mysql_select_db("project2");
$query="truncate table quiz2";
mysql_query($query);
header("location:profile2.php? m=1");



?>;