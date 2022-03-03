<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
 	$db = "contactsapp";
 	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

 	if (isset($_POST['signup']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$secret=$_POST['secret'];
		
			$sql=mysqli_query($conn,"select * from signup WHERE email='$email'") or die (mysqli_error());
			$row=mysqli_num_rows($sql);
			if ($row > 0)
			{
			echo "<script>alert('E-mail already taken!'); window.location='SignUp.html'</script>";
			}
			else
			{
			mysqli_query($conn,"INSERT INTO signup(email,password,secret)
			VALUES ('$email','$password','$secret')")
			or die (mysqli_error());
			echo "<script>alert('Account successfully created!'); window.location='index.html'</script>";
			}
			
	}

?>