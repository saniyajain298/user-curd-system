<?php
include "dbcon.php";

	$d=$_GET['dob'];

	if($d=="9"){
		$d="2000-2009";
		$data= "SELECT * FROM student_user WHERE dob BETWEEN '2000-1-1' AND '2009-12-31'";	
	}
	else if($d=="19"){
		$d="2010-2019";
		$data= "SELECT * FROM student_user WHERE dob BETWEEN '2010-1-1' AND '2019-12-31'";	
	}
	else{
		$d="2020-2022";
		$data= "SELECT * FROM student_user WHERE dob BETWEEN '2020-1-1' AND '2022-12-31'";
	}
	$result=mysqli_query($con,$data);	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<!-- link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!-- font awesome link -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<!-- Google fonts -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@889&family=Quintessential&display=swap" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

</head>
<body class="bd-gradient" style="background-color:#66FCF1;font-family: 'Lora', serif;">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="d-flex justify-content-center">
					<h1 style="font-family: 'Quintessential', cursive;">DOB between <?php echo $d?></h1>
				</div>
					<table class="table table-hover table-striped"  style="margin-top: 2%;">
					<thead class="text-dark" style="background-color:#45A29E;">
						<th>Id </th>
						<th>Name</th>
						<th>City</th>
						<th>DOB</th>
						<th>Delete</th>
					</thead>					
						<?php
						while ($d=mysqli_fetch_array($result)) {
						?>
						<tbody class="bg-light">
						<td scope="col"><?php echo $d['id'];?></td>
						<td scope="col"><?php echo $d['name'];?></td>
						<td scope="col"><?php echo $d['city'];?></td>
						<td scope="col"><?php echo $d['dob'];?></td>
						<td scope="col">
							<a href="student_delete.php?id=<?php echo $d['id'];?>">
								<i class="fas fa-trash text-danger"></i>
							</a>
						</td>
						</tbody>
						<?php
						}
						?>
						
				</table>
				<div class="d-flex justify-content-center">
					<a class="btn btn-primary" href="student_display.php" role="button">Close</a>
				</div>
			</div>
			<div class="col-md-2" ></div>
		</div>
		
	</div>
</body>
</html>