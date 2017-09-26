<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>

<?php
session_start();
$username2=$_SESSION['admin'];
$password2=$_SESSION['password'];
//$id=$_SESSION['id'];

$username=$_POST['username'];

$password=$_POST['password'];

mysql_connect('localhost','root','');
mysql_select_db("project2");

$query="insert into admin(username,password) values('$username','$password')";

mysql_query($query);

$query="select *from admin where username='$username2' and password='$password2'";

$res=mysql_query($query);

$row=mysql_fetch_array($res,MYSQL_BOTH);
 $id=$row['id'];
 //echo $id;

 $query3="delete from admin where id='$id'";
 mysql_query($query3);

header("Location:profile2.php");
?>