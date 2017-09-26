<?php
$name=$_POST['name'];
$age=$_POST['age'];
$disease=$_POST['disease'];
$gender=$_POST['gender'];
$quantity=$_POST['quantity'];
$p_addr=$_POST['p_addr'];
$contact_no=$_POST['contact_no'];
$d_type=$_POST['d_type'];
$date_of_donation=['date_of_donation'];
mysql_connect('localhost','root','');
mysql_select_db("project2");
$query="insert into doner (name,disease,date_of_donation,age,quantity,sex,address,contact_detail,type_of_donation) 
values('$name','$disease','$date_of_donation','$age','$quantity','$gender','$p_addr','$contact_no','$d_type')";
header("location:index.php?m=1");
?>