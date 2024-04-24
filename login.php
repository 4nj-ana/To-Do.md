<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>ToDo</title>
    <link rel="icon" href="images/bo.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/home.css">

</head>

<body>
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
					<div class="">
					<h2> TryOut </h2>
						<span><img src="images/boo.png" alt=""> Craft your vision into reality !</span>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign" style="border-radius: 10px;">
						<h2 class="log-title">Login</h2>
							
						<form method="post" action="log.php">
							<?php
							error_reporting(0);
							if($_REQUEST['st']=="fail")
							{
								echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
								<center><b>Incorrect Email ID or Password!<b></center>
							</div>";
							}
							?>
							
							<div class="form-group">	
							  <input type="text" id="input" name="email" required="required"/>
							  <label class="control-label" for="input" >Email ID</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="password"/>
							  <label class="control-label" for="input" >Password</label><i class="mtrl-select"></i>
							</div>
							<div class="submit-btns">
								<input type="submit" class="btn btn-primary" name="submit" value="Login">
							</div>
							<p style="text-align:right; margin-right:0px;">Not a member? <a href="signup.php" title="" class="forgot-pwd">Sign up</a></p>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>	

</html>