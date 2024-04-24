<?php
session_start();
include("header.php");

if (empty($_SESSION['user'])) {
    header("location: login.php");
    exit();
}

include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Todo Management</title>
    <link rel="stylesheet" href="css/home.css">
    <style>
        body {
            background-image: url('im.jpg'); 
            background-size: cover;
            background-position: center;
            border-radius: 10px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <img src="image (2).jpg" alt="">
            <h2>Create Project</h2>
            <a href="create_project.php">Create</a>
        </div>
        <div class="box">
            <img src="img.jpg" alt="">
            <h2>View Projects</h2>
            <a href="view_projects.php">View</a>
        </div>
    </div>
</body>
</html>


