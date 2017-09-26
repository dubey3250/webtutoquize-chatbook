
<?php
session_start();
$username=$_POST['username'];
//echo $username;
//echo "<br/>";

$password=$_POST['password'];
//echo $password;
//echo "<br/>";
//$id=$_POST['id'];

mysql_connect('localhost','root','');

mysql_select_db("project2");

$query="select *from admin where username='$username' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['admin']=$username;
	$_SESSION['password']=$password;
	//$_SESSION['id']=$id;
	header("location:profile2.php");	
	
}
else
{
	header("location:index.php");
}

?>