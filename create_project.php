<?php
session_start();
include("header.php");

if (empty($_SESSION['user'])) {
    header("location: login.php");
    exit();
}

include("connection.php");

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $userid = $_SESSION['uid'];

    $insertQuery = "INSERT INTO projects (title, userid) VALUES ('$title', '$userid')";

    if (mysqli_query($con, $insertQuery)) {
        header("location: view_projects.php");
        exit();
    } else {
        echo '<script>alert("Failed to create project. Please try again later.");</script>';
    }
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <link rel="stylesheet" href="css/create.css">
    <style>
        body {
            background-image: url('im.jpg'); 
            background-size: cover;
            background-position: center;
            padding: 0;
            margin: 0;
            height: 100vh;
            border-radius: 10px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Create a New Project</h2>
            <form action="" method="POST">
                <label for="title">Project Title:</label>
                <input type="text" id="title" name="title" required>
                <button type="submit" name="submit">Create Project</button>
            </form>
        </div>
    </div>
</body>
</html>