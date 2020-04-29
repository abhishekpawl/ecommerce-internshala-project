<?php

require 'includes/common.php';

if(isset($_SESSION['email'])) {
    header('location: home.php');
}

?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <title>Sign Up | E-Store.com</title>
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
        </style>
    </head>
    
    <body style="padding-top: 50px;">
        
        <?php
        include 'includes/header.php';
        ?>
        <br><br>
        
        <div class="container" style="margin-bottom: 160px;">
            
            <div class="row row_style">
                
                <div class="col-xs-7">
                    <img src="./img/signuppage.jpg">
                </div>
                
                <div class="col-xs-5">
                    
                    <h2>SIGN UP</h2>
                    
                    <form action="signup_script.php" method="POST">
                        
                        <div class="form-group col-xs-10">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>
                        <div class="form-group col-xs-10">
                            <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                            <?php
                            if(isset($_GET["m1"])){
                              echo $_GET['m1'];
                            }
                            ?>
                        </div>
                        <div class="form-group col-xs-10">
                            <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                        </div>
                        <div class="form-group col-xs-10">
                            <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                            <?php
                            if(isset($_GET["m2"])){
                              echo $_GET['m2'];
                            }
                            ?>
                        </div>
                        <div class="form-group col-xs-10">
                            <input  type="text" class="form-control"  placeholder="City" name="city">
                        </div>
                        <div class="form-group col-xs-10">
                            <input  type="text" class="form-control"  placeholder="Address" name="address">
                        </div>
                        
                        <div class="form-group col-xs-10" align="right">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                    </form>
                    
                </div>
                
            </div>
            
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
    
</html>