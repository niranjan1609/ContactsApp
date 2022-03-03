<?php
	session_start();
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
 	$db = "contactsapp";
 	$email = $_SESSION['email'] ;
	$secret = $_SESSION['secret'];
	$checkemail	= $_SESSION['checkemail'];
	$checksecret = $_SESSION['checksecret'];
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
	if (isset($_POST['submit']))
	{
		$password =$_POST['password'];
		if($checkemail==$email && $checksecret == $secret ){
				
			$sql=mysqli_query($conn,"UPDATE `signup` set `password`='$password' WHERE email='$email'") or die (mysqli_error());	
			echo "<script>alert('Changed password successfully, please login'); window.location='index.html'</script>";
		}
		else{
			echo "<script>alert('Secret or email that you entered is Incorret, please check'); window.location='forgotpassword.php'</script>";
		}
	}
 	

 ?>