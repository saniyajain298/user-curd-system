<?php
include "dbcon.php";
$data="Select * from student_user";
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
</head>
<body class="bd-gradient" style="background-color:#66FCF1;font-family: 'Lora', serif;">
	<div class="container-fluid">
		<div class="row" >
			<nav class="navbar navbar-light bg-dark bg-gradient" style="width: 100%;" >
  			<span class="navbar-brand mb-0 h1 text-light">Navbar</span>
  			
				 	<div class="dropdown text-light " style="margin-right: 5%;">
  					<button type="button" style="background-color: #45A29E;" class="btn dropdown-toggle" data-bs-toggle="dropdown">
			 	  	DOB
			 			</button>
			  		<ul class="dropdown-menu">
			    		<li><a class="dropdown-item" href="student_dob.php?dob=<?php echo '9'?>">2000-2009</a></li>
				   		<li><a class="dropdown-item" href="student_dob.php?dob=<?php echo '19'?>">2010-2019</a></li>
			    		<li><a class="dropdown-item" href="student_dob.php?dob=<?php echo '22'?>">2020-2022</a></li>
			  		</ul>
			  		<button type="button" class="btn dropdown-toggle" style="background-color: #45A29E;" data-bs-toggle="dropdown">
						 	City
				 		</button>
				 		<ul class="dropdown-menu">
				 			<?php
			  				include "dbcon.php";
								$data1="SELECT DISTINCT `city`FROM `student_user` ";
								$result1=mysqli_query($con,$data1);
			  				while ($d1=mysqli_fetch_array($result1)) {				  		
				  		?>
				   		<li><a class="dropdown-item" href="city_disp.php?city=<?php echo $d1['city']  ?>"><?php echo $d1['city'] ?></a></li>
				   		<?php
			    			}
			  			?>
			  		</ul>
			  		<a class="btn "style="background-color: #45A29E;" href="studentRegister.php" role="button">Add Record</a>
					</div>	
							
			</nav>
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="d-flex justify-content-center">
					<h1 style="font-family: 'Quintessential', cursive;">All Enteries</h1>
				</div>

				<table class="table table-hover table-striped " style="margin-top: 2%;">
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
					</tbody >
					<?php
						}
					?>		

				</table>
			<hr style="border-width: 2%;">
			</div>
			<div class="col-md-2" ></div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>