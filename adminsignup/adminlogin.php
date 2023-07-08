<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Login Form</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="wavestyle.css">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" crossorigin="anonymous" />

    </head>
    <body>
      

<div class="header">
<div class="inner-header flex">
   <?php require_once "controllerUserData.php"; ?>
    
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 form login-form">
                    <form action="index.php" method="POST" autocomplete="">
                        <h2 class="text-center" style="color:black;"> Admin Login </h2>
                        <p class="text-center" style="color:black;"><b>Login with your email and password.</b></p>
                        <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach($errors as $showerror){
                                    echo $showerror;
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="link forget-pass text-left"><a href="forgot-password.php"><b>Forgot password?</b></a></div>
                        <div class="form-group">
                            <input class="form-control button" type="submit" name="login" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
   
    
    </div>
    
    
    
    </div>
    
    <div class="content flex">
    <p>Trash2treasure<a href="../login-user.php"> <i class="fa fa-lock" aria-hidden="true"> Login As User</i></a>

    </p>
    </div>
  
    </body>
</html>