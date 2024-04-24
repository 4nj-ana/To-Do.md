<?php
session_start();
include("header.php");

if (empty($_SESSION['user'])) {
    header("location: login.php");
    exit();
}

include("connection.php");

if (isset($_GET['id'])) {
    $projectid = $_GET['id'];
    
    
    $query_project = "SELECT * FROM projects WHERE id='$projectid'";
    $result_project = mysqli_query($con, $query_project);
    $project = mysqli_fetch_assoc($result_project);


    $query_todos = "SELECT * FROM todos WHERE projectid='$projectid'";
    $result_todos = mysqli_query($con, $query_todos);
    $todos = mysqli_fetch_all($result_todos, MYSQLI_ASSOC);
} else {
    header("location: view_projects.php");
    exit();
}


if (isset($_POST['submit_project'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);

    $updateQuery = "UPDATE projects SET title='$title' WHERE id='$projectid'";

    if (mysqli_query($con, $updateQuery)) {
        header("location: project_details.php?id=$projectid");
        exit;
    } else {
        echo '<script>alert("Error updating project details. Please try again.");</script>';
    }
}


if (isset($_POST['submit_todo'])) {
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $insertQuery = "INSERT INTO todos (description, status, userid, projectid) VALUES ('$description', 'pending', '{$_SESSION['uid']}', '$projectid')";

    if (mysqli_query($con, $insertQuery)) {
        header("location: project_details.php?id=$projectid");
        exit;
    } else {
        echo '<script>alert("Error adding new todo. Please try again.");</script>';
    }
}


if (isset($_POST['submit_update'])) {
    $todoId = $_POST['todo_id'];
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $status = isset($_POST['status']) ? 'complete' : 'pending'; 

    $updateQuery = "UPDATE todos SET description='$description', status='$status' WHERE id='$todoId'";

    if (mysqli_query($con, $updateQuery)) {
        header("location: project_details.php?id=$projectid");
        exit;
    } else {
        echo '<script>alert("Error updating todo. Please try again.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project['title']; ?> - Project Details</title>
    <link rel="stylesheet" href="css/projectds.css">
</head>
<style>
        body {
            background-image: url('im.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
    <div class="container">
        <h2><?php echo $project['title']; ?> - Project Details</h2>-
        <form method="post" class="edit-form">
            <label for="title">Project Title:</label>
            <input type="text" id="title" name="title" value="<?php echo $project['title']; ?>">
    
            <button type="submit" class="button" name="submit_project">Save Project Details</button>
        </form>
        <h3>Todos:</h3>
        <ul class="todo-list">
            <?php foreach ($todos as $todo): ?>
                <li class="todo-item">
                    <form method="post">
                        <label>
                            <input type="checkbox" name="status" value="complete" <?php echo ($todo['status'] == 'complete') ? 'checked' : ''; ?>>
                            <input type="text" name="description" value="<?php echo $todo['description']; ?>">
                        </label>
                        <input type="hidden" name="todo_id" value="<?php echo $todo['id']; ?>">
                        <button type="submit" class="button" name="submit_update">Update</button>
                        <span>Status: <?php echo ucfirst($todo['status']); ?></span>
                    </form>
                    <span>Created: <?php echo $todo['created_date']; ?></span><br>
                    <span>Updated: <?php echo $todo['updated_date']; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <h3>Add New Todo:</h3>
        <form method="post">
            <input type="text" id="description" name="description" required placeholder="Enter new todo description...">
            <button type="submit" class="button" name="submit_todo">Add Todo</button>
        </form>
    </div>
</body>
</html>