<?php
session_start();
include('connection.php');

if (isset($_POST['submit']))
{	
$username=$_POST['email']; 
$password=$_POST['password']; 

	$query = "SELECT * FROM users WHERE BINARY email='$username' AND BINARY password='$password'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		$user = mysqli_fetch_array($result);
		$_SESSION['user'] = 'user';
		$_SESSION['uid'] = $user['id'];
		header("location: home.php");
	} else {
		echo "Error: " . mysqli_error($con);
		header("location: login.php?st=fail");
	}
}
	
?>
