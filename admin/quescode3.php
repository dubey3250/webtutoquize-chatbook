<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
}
?>

<?php
$question=$_POST['ques'];
$option1=$_POST['op1'];
$option2=$_POST['op2'];
$option3=$_POST['op3'];
$option4=$_POST['op4'];
$status=$_POST['status'];
mysql_connect('localhost','root','');
mysql_select_db("project2");

$query="insert into quiz3 (question,option1,option2,option3,option4,date,status) values('$question','$option1','$option2','$option3','$option4',curdate(),'$status')";

mysql_query($query);

header("location:ques3.php");