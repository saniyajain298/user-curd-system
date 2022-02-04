<?php
include "dbcon.php";
$name=$_POST['name'];
$city=$_POST['city'];
$dob=$_POST['dob'];
echo $data="insert into student_user(name,city,dob)value('$name','$city','$dob')";
echo $result=mysqli_query($con,$data);
if ($result) {
	header('location:student_display.php');
}
?>