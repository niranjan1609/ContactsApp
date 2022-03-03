				<!DOCTYPE html>
					<html lang="en">
					  <head>
					  	<title>Update Password</title>
					  	<meta charset="utf-8">
					  	<meta name="viewport" content="width=device-width, initial-scale=1">

					  	<!--Bootstrap CSS-->
					  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
					  </head>
					  <body>
					  	<div class="container">
					  		<div class="row">
					  			<div class="col-md-4 offset-md-4">
					  				<div class="updatepassword-form">
					  					<form action="changepswd.php" method="POST" class="mt-5 border p-4 bg-light">
					  						<h4 class="mb-3 text-center">Update Password</h4>
					  						<div class="row">
							    				<div class="mb-3 col-md-12">
							     				 	<label for="inputpassword" class="col-form-label">Pasword</label>
							     				 	<input type="password"  name="password" required id="inputpassword" class="form-control">
							    				</div>
							    				<div class="mt-3 mb-2 d-grid  col-12 mx-auto">
							    					<button class="btn btn-primary " name = "submit">submit</button>
							    				</div>
						    				</div>
					    				</form>
					    			</div>
					    		</div>
					 		</div>
						</div>
					  <!--Bootstrap JS-->
					  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
					  </body>
					  </html>
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
 	$db = "contactsapp";
 	$email=$_POST['email'];
 	$secret=$_POST['secret'];

 	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 	
		$query = mysqli_query($conn, "SELECT email,secret from signup where email = '$email' or secret = '$secret'") or die (mysqli_error());
		$row=mysqli_fetch_array($query);
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['secret'] =$secret;
		$_SESSION['checkemail'] = $row[0];
		$_SESSION['checksecret'] = $row[1];			
		?>