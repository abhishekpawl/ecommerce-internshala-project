<?php

require 'includes/common.php';

?>

<!OCTYPE html>
<html lang="en">
    
    <head>
        <title>Cart | E-Store.com</title>
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
                
                <div class="col-xs-6 col-xs-offset-3">
                    
                    <table class="table table-striped table-hover">
                        
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT i.price AS Price, i.id, i.name AS Name FROM users_items ui JOIN items i ON ui.item_id = i.id WHERE ui.user_id='$user_id' AND status='Added to cart'";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        if(mysqli_num_rows($result)>0) {
                            ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
                            while($row = mysqli_fetch_array($result)) {
                                $sum+= $row["Price"];
                                $id = "";
                                $id .= $row["id"] . ",";
                                echo "<tr> <td>" . "#" . $row["id"] . "</td> <td>" . $row["Name"] . "</td> <td>Rs " . $row["Price"] . "</td> <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove Item </a></td> </tr>";
                            }
                            $id = rtrim($id, ",");
                            echo "<tr> <td></td> <td>Total</td> <td>Rs " . $sum . "</td> <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td> </tr>";
                            ?>
                        </tbody>
                        <?php
                        } else {
                            echo "<center><h2>There are no items in your cart.<h2><h3>Visit <a href='home.php'>home</a></h3></center>";
                        }
                        ?>
                        
                    </table>
                    
                </div>
                
            </div>
            
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
    
</html>