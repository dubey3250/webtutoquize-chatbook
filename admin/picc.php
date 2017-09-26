<?php
$file=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="file/";

mysql_connect('localhost','root','');

mysql_select_db("project2");
$query="insert into glry (file) values('$file')";
mysql_query($query);

move_uploaded_file($tmp_name,$location.$file);
header("location:pic.php");

?>
