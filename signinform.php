					
<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "contactsapp";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
						if(isset($_POST['signin']))
						{
							$email=$_POST['email'];
							$password=$_POST['password'];
						{
							$result = mysqli_query($conn,"SELECT * FROM signup WHERE email = '$email' and password='$password'")
							or die(mysqli_error());

							$row = mysqli_fetch_array($result);
							$count = mysqli_num_rows($result);				
								if ($count == 0) 
									{
									echo "<script>alert('Please check your username and password!'); window.location='index.html'</script>";
									} 
								else if ($count > 0)
									{
										session_start();
										$_SESSION['id'] = $row['id'];
										header("location:contacts.php");
									}
						}				
						}
?>