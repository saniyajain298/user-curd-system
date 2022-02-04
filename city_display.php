
<?php
include "dbcon.php";
$data="SELECT DISTINCT `city`FROM `student_user` ";
$result=mysqli_query($con,$data);
echo "<pre>";
print_r($result);


?>