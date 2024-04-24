<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
   
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $insertQuery = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";

    if (mysqli_query($con, $insertQuery)) {
		echo '<script>alert("Succesfully Registered!")
			  window.location="login.php";
			  </script>'; 
        exit;
    } else {
        echo '<script>alert("Registration failed. Please try again later.");</script>';
    }
}
mysqli_close($con);
?>
