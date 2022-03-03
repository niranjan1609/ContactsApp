<?php
	session_start();
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
 	$db = "contactsapp";
 	$connection = new mysqli($dbhost, $dbuser, $dbpass,$db);
 	
 	if (isset($_POST['save']))
	{
		$name=$_POST['name'];
		$num=$_POST['num'];
		$email=$_POST['email'];
		$id = $_SESSION["id"];
			$res=mysqli_query($connection,"INSERT INTO contacts(name,num,email,user_id) VALUES ('$name','$num','$email','$id')") or die ('Error: ' .mysqli_error($connection));
			
			if ($res)
			{
			header("location:contacts.php");
			}else{
				echo "Failed";
			}
			
	}
?>