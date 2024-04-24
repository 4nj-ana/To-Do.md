<?php
error_reporting(0);

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<title>ToDo List</title>

	<link rel="stylesheet" href="css/main.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">


</head>

<style>
		.logout-link {
			font-family: "Muli", "Segoe Ui";
		}
	</style>

<body>
	<div class="theme-layout">
		<div class="responsive-header">
			<ul>
				<li><span>Home</span>
				</li>
			</ul>

		</div>

		<div class="topbar stick">
			<div class="logo">
				<a href="home.php"><h3><b>Tryout</h3></a>
			</div>

			<div class="top-area">
				<div class="user-img">
					<br>
				</div>
				<a href="home.php" title=""><i class="ti-home"></i> Home</a>
				&nbsp;&nbsp;&nbsp;
				<?php
				include("connection.php");
				$sel1 = mysqli_query($con, "SELECT * FROM `users` WHERE `id`='$_SESSION[uid]]'");
				$row1 = mysqli_fetch_array($sel1);
				?>
				<i class="ti-user"> </i>
					<?PHP echo $row1['name']; ?>
				
				&nbsp;&nbsp;&nbsp;
				<a href="logout.php"><i class="ti-power-off"></i> Logout</a>
					
			</div>
		</div>