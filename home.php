<?php

require 'includes/common.php';

if(!isset($_SESSION['email'])) {
    header('location: index.php');
}

?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <title>Home | E-Store.com</title>
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
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>
        
        <br><br>
        
        <div class="container" style="margin-bottom: 160px">
            
            <div class="row row_style">
                <div class="jumbotron home-spacer" id="products-jumbotron" style="background-color: slategray;">
                    <center>
                        <h1>Welcome to our E-Store</h1>
                        <p>Bringing to you the best lot of mobile phones. No need to hunt around, we have all in one place.</p>
                    </center>
                </div>
            </div>
            <hr><br>
            
            <div class="row row_style">
                
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/iphone6splus.png" alt="iphone 6s plus">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Iphone 6s plus</h3>
                                <p>Price: Rs. 40000.00</p>
                                <?php
                                if(check_if_added_to_cart(1)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/iphone7.png" alt="iphone 7">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Iphone 7</h3>
                                <p>Price: Rs. 60000.00</p>
                                <?php
                                if(check_if_added_to_cart(2)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/iphone7plus.png" alt="iphone 7 plus">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Iphone 7 plus</h3>
                                <p>Price: Rs. 69000.00</p>
                                <?php
                                if(check_if_added_to_cart(3)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/iphonex.png" alt="iphone X">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Iphone X</h3>
                                <p>Price: Rs. 88000.00</p>
                                <?php
                                if(check_if_added_to_cart(4)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row row_style">
                
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/samsungs7edge.png" alt="samsung galaxy s7 edge">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Samsung Galaxy s7 edge</h3>
                                <p>Price: Rs. 45000.00</p>
                                <?php
                                if(check_if_added_to_cart(5)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/samsungs8.png" alt="samsung galaxy s8 plus">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Samsung Galaxy s8 plus</h3>
                                <p>Price: Rs. 65000.00</p>
                                <?php
                                if(check_if_added_to_cart(6)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/samsungnote8plus.png" alt="samsung galaxy note 8 plus">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Samsung Galaxy Note 8 plus</h3>
                                <p>Price: Rs. 60000.00</p>
                                <?php
                                if(check_if_added_to_cart(7)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/samsunga8.png" alt="samsung galaxy a8">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Samsung Galaxy A8</h3>
                                <p>Price: Rs. 35000.00</p>
                                <?php
                                if(check_if_added_to_cart(8)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row row_style">
                
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/op3.png" alt="oneplus 3">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>OnePlus 3</h3>
                                <p>Price: Rs. 28000.00</p>
                                <?php
                                if(check_if_added_to_cart(9)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/op3t.png" alt="oneplus 3T">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>OnePlus 3T</h3>
                                <p>Price: Rs. 31000.00</p>
                                <?php
                                if(check_if_added_to_cart(10)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/op5.png" alt="oneplus 5">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>OnePlus 5</h3>
                                <p>Price: Rs. 34000.00</p>
                                <?php
                                if(check_if_added_to_cart(11)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/op5t.png" alt="oneplus 5T">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>OnePlus 5T</h3>
                                <p>Price: Rs. 36000.00</p>
                                <?php
                                if(check_if_added_to_cart(12)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row row_style">
                
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/redminote4.png" alt="xiaomi redmi note 4">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>XIAOMI Redmi Note 4</h3>
                                <p>Price: Rs. 13000.00</p>
                                <?php
                                if(check_if_added_to_cart(13)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/mia1.png" alt="mi a1">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Mi A1</h3>
                                <p>Price: Rs. 15000.00</p>
                                <?php
                                if(check_if_added_to_cart(14)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/mimax2.png" alt="mi max 2">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Mi Max 2</h3>
                                <p>Price: Rs. 16000.00</p>
                                <?php
                                if(check_if_added_to_cart(15)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="./img/mimix2.png" alt="mi mix 2">
                        <div class="caption" style="background-color: gainsboro;">
                            <center>
                                <h3>Mi Mix 2</h3>
                                <p>Price: Rs. 36000.00</p>
                                <?php
                                if(check_if_added_to_cart(16)) {
                                ?>
                                    <p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>
                                <?php
                                } else {
                                ?>
                                    <p><a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
            
        <?php
                include 'includes/footer.php';
        ?>
        
    </body>
    
</html>