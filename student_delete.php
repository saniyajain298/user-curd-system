<?php
	include "dbcon.php";
	$id=$_GET['id'];
	$data="Delete from student_user where id=$id";
	$result=mysqli_query($con,$data);
	if ($result) {
		header('location: student_display.php');
	}

?>