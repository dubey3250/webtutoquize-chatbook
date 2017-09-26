<?php
$id=$_REQUEST['id'];
//echo $id;
include("database.php");
$location="file/";

$query="select *from glry where id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$file=$row['file'];


$res2="delete from glry where id='$id'";
mysql_query($res2);
unlink($location.$file);
header("location:pic.php");
?>