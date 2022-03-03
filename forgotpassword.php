
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Forgot Password</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!--Bootstrap CSS-->
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-4 offset-md-4">
  				<div class="forgotpassword-form">
  					<form action="updatepswd.php" method="POST" class="mt-5 border p-4 bg-light">
  						<h4 class="mb-3 text-center">Forgot Password?</h4>
  						<p class="text-center mb-5 text-secondary">You can reset your password here.</p>
  						<div class="row">
	   			 			<div class="mb-3 col-md-12">
	   			 				<label for="InputEmail" class="form-label">Email</label>
	     						<input type="email" name ="email" required class="form-control" placeholder="Enter Email">
	     					</div>
		    				<div class="mb-3 col-md-12">
		     				 	<label for="inputSecret" class="col-form-label">Secret</label>
		     				 	<input type="text"  name="secret" required id="inputSecret" class="form-control" placeholder="Enter Secret">
		    				</div>
		    				
		    				<div class="mt-3 mb-2 d-grid  col-12 mx-auto">
		    					<button class="btn btn-primary " name = "reset">Reset Password</button>
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
  