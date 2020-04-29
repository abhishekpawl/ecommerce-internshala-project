<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE.html>
<html lang="en">
    
    <head>
        <title>Login | E-Store.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .row_style{
                margin-top:10px;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: black;
                color: gray;
                text-align: center;
                padding: 5px 0px 15px 0px;
            }
            .container-decor{
                padding: 0px 10px 0px 10px;
            }
        </style>
    </head>
    
    <body style="padding-top: 50px;">
        
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container" style="margin-bottom: 160px;">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class = "panel-heading">
                            <h1>LOGIN</h1>
                        </div>
                        <div class=panel-body container-decor">
                            <p class="text-warning"><strong><em>Login to make a purchase</em></strong></p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="container-decor2">    
                                    <button type="submit" class="btn btn-primary" value="login_submit">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer"><strong>Don't have an account? <a href='signup.php'>Register</a></strong></div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
    
</html>