<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student</title>
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="bd-gradient" style="background-color:#66FCF1;font-family: 'Lora', serif;">
	<form method="post" action="student_insert.php">
		<div class="container" >
			<div class="row d-flex align-items-center justify-content-center "style="width: 100%; height: 100vh;" >
				<div class="col-md-6">
					<div class="card"  >
					  	<div class="card-header text-center text-dark" style="background-color:#45A29E;">
					    	Student Details
					  	</div>
					  	
					  	<div class="card-body">
					    	<div class="d-flex">
					    		<label class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-10" style="margin-left: 2%;"  >
						 	      <input type="text" style="padding-left: 5%;" 	class="form-control " placeholder="Enter Name" name="name" >
					 		    </div>
					 		    
					    	</div>
					    	<hr>
					    	<div class="d-flex">
					    		<label class="col-sm-2 col-form-label">City</label>
								<div class="col-sm-10" style="margin-left: 2%;"  >
						 	      <input type="text" style="padding-left: 5%;" 	class="form-control"  placeholder="Enter City" name="city">
					 		    </div>
					 		    
					    	</div>
					    	<hr>
					    	<div class="d-flex">
					    		<label class="col-sm-2 col-form-label">DOB</label>
								<div class="col-sm-10"  style="margin-left: 2%;" >
						 	      <input type="date" style="padding-left: 5%;" 	class="form-control"  placeholder="dd/mm/yyyy" name="dob" >
					 		    </div>
					 		    
					    	</div>
					    	<hr>
					    	<div class="d-flex justify-content-end">
					    		<button class="btn btn-primary ">Submit</button>	
					    	</div>
					    
					  	</div>
					  	
					</div>

				</div>
				
			</div>

			
			
		</div>
		
	</form>
</body>
</html>