<?php

require 'includes/common.php';
if(!isset($_SESSION['email'])) {
    header('location: index.php');
}

$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//changing the status of the product purchased in the users_items table to Confirmed
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") AND status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));

?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <title>Success | E-Store.com</title>
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
        
        <div class="container-fluid" style="margin-bottom: 160px; min-height: 600px;">
            
            <div class="col-xs-10 col-xs-offset-1">
                
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="cart.php">here</a> to purchase any other item.</p>
                </div>
                
            </div>
            
        </div>
        
        <?php
        include 'includes/header.php';
        ?>
        
    </body>
    
</html>