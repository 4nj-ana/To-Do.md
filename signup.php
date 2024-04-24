<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>BuyOut</title>
    <link rel="icon" href="images/bo.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
<div class="theme-layout">
    <div class="container-fluid pdng0">
        <div class="row merged">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="land-featurearea">
                    <div class="land-meta">
                        <div class="">
                            <span><img src="images/boo.png" alt="">Craft your vision into reality !</span>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-reg-bg">
                    <div class="log-reg-area sign" style="border-radius: 10px;">
                        <h2 class="log-title">Sign Up</h2><br>
                        <form method="POST" action="register.php" enctype="multipart/form-data">
                            <div class="form-group">  
                                <input type="text" class="form-control p-2" name="name" placeholder="Name" required="required" />
                            </div>
                            <div class="form-group">  
                                <input type="text" class="form-control p-2" name="phone" placeholder="Phone" required="required" />
                            </div>
                            <div class="form-group">  
                                <input type="email" class="form-control p-2" name="email" placeholder="Email" required="required" />
                            </div>
                    
                            <div class="form-group">  
                                <input type="password" class="form-control p-2" name="password" placeholder="Password" required="required" />
                            </div><br><br>
                            <div>
                                <button class="btn btn-primary" type="submit" name="submit"style="margin-left:8px;">Sign Up</button>
                            </div><br>
                            <p style="text-align:right; margin-right:0px;">Already a user? <a href="login.php" title="" class="forgot-pwd">Sign in</a></p>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>    
</html>
