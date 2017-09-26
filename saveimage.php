<?php
session_start();
//set random name for the image, used time() for uniqueness

$filename =  time() . '.jpg';
$filepath = 'saved_images/';

//read the raw POST data and save the file with file_put_contents()
$result = file_put_contents( $filepath.$filename, file_get_contents('php://input') );
mysql_connect('localhost','root','');
mysql_select_db("project2");
$user=$_SESSION['user'];
$query="insert into biometrix (userid,image) values('$user','$filename')";
mysql_query($query);
if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}

echo $filepath.$filename;
?>
