<?php
$id=$_REQUEST['id'];
mysql_connect('localhost','root','');
mysql_select_db("project2");
$query="delete from quiz where id='$id'";
mysql_query($query);
header("location:view.php");
?>