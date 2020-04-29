<?php

require 'includes/common.php';
if(!isset($_SESSION['email'])) {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Settings | E-Store.com</title>
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
        
        <div class="container" style="margin-bottom: 160px;">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3" id="settings-container">
                    <h1>Change Password</h1>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" name="oldpassword" placeholder="Old Password" pattern=".{6,}" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" name="newpassword" placeholder="New Password" pattern=".{6,}" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" name="newpassword" placeholder="Re-type New Password" pattern=".{6,}" required>
                        </div>
                        <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                        </b></div>
                        <br>
                        <div class="container-decor2">    
                            <button type="submit" class="btn btn-primary">Change</button>
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