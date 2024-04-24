<?php
session_start();
include("header.php");

if (empty($_SESSION['user'])) {
    header("location: login.php");
    exit();
}

include("connection.php");
$query = "SELECT * FROM projects WHERE userid='$_SESSION[uid]'";
$result = mysqli_query($con, $query);

if (!$result) {
    echo "Error: " . mysqli_error($con);
    exit();
}

$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Projects</title>
    <link rel="stylesheet" href="css/viewps.css"> 
</head>
<style>
        body {
            background-image: url('im.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
    <div class="container">
        <?php foreach ($projects as $project): ?>
            <div class="box">
                <h2><?php echo $project['title']; ?></h2>
                <p>Created Date: <?php echo $project['created_date']; ?></p>
                <a href="project_details.php?id=<?php echo $project['id']; ?>">View Project</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

