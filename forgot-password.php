
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgot-password.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h1 class="text-center" >Forgot Password</h1>
                    <h3 class="text-center" style="padding-bottom : 2px; margin-left: 10px">Enter your email address</h3>
                    <?php
                        if(array_key_exists('button1', $_POST)) {
                            echo "<script> alert('Password reset link has been sent to your registered email id.'); location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/index.html?' </script>";
                        }
                        ?>
                    <div class="form-group">
                        <input class="form-control" style="padding-right:17%;padding-left:17%; margin-bottom : 5px; border-radius: 5px" type="email" name="email" placeholder="Enter email address" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" style="margin-top : 5px;margin-left: 60px" value="Continue" name=button1>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>